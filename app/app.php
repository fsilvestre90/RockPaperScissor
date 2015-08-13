<?php

    // DEPENDENCIES
        require_once __DIR__."/../vendor/autoload.php"; // frameworks
        require_once __DIR__."/../src/RPS.php"; // example of filepath to first Object created

    // INITIALIZE COOKIE SESSION
    session_start();
    if(empty($_SESSION['players'])){
        $_SESSION['players'] = array();
    }


    // INITIALIZE APPLICATION
        $app = new Silex\Application();
        $app->register(new Silex\Provider\TwigServiceProvider(), array(
            'twig.path' => __DIR__."/../views"
        ));
    // ROUTES

        // display index webpage
        $app->get('/', function() use ($app) {

            return $app['twig']->render('index.html.twig');
        });

        $app->post('/player2_choice', function() use ($app) {
            $player1 = new Player($_POST['player1_input']);
            $player1->save();

            return $app['twig']->render('player_2.html.twig');
        });

        $app->post('/game_results', function() use ($app) {
            $game = new RPS;
            $player1_input = Player::getPlayerInformation();
            $outcome = $game->RPS_game($player1_input, $_POST['player2_input']);
            Player::resetPlayerInformation();
            return $app['twig']->render('game_results.html.twig', array('result' => $outcome));
        });


    return $app;

?>
