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
            array_push($_SESSION['players'], (int)$_POST['player1_input']);

            return $app['twig']->render('player_2.html.twig');
        });

        $app->post('/game_results', function() use ($app) {
            $game = new RPS;
            $player1_choice = $_SESSION['players'];
            $game->RPS_game($player1_choice[0], $_POST['player2_input']);
var_dump($player1_choice);
            return $app['twig']->render('game.html.twig', array('result' => $game));
        });


    return $app;

?>
