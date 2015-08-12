<?php

    require_once "src/RPS.php";

    class RPSTest extends PHPUnit_Framework_TestCase
    {

        function test_RPS_draw(){
            $test_RPS = new RPS;
            $player1_input = 0;
            $player2_input = 0;

            //act
            $result = $test_RPS->RPS_game($player1_input, $player2_input);

            //Assert
            $this->assertEquals("DRAW!", $result);


        }

        function test_RPS_player1Scissors() {

            $test_RPS = new RPS;
            $player1_input = 0;
            $player2_input = 2;

            //act
            $result = $test_RPS->RPS_game($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 1 wins", $result);

        }

        function test_RPS_player2Scissors() {

            $test_RPS = new RPS;
            $player1_input = 2;
            $player2_input = 0;

            //act
            $result = $test_RPS->RPS_game($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 2 wins", $result);

        }

        function test_RPS_Player1Wins(){

            $test_RPS = new RPS;
            $player1_input = 1;
            $player2_input = 0;

            //act
            $result = $test_RPS->RPS_game($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 1 wins", $result);
        }

        function test_RPS_Player2Wins(){

            $test_RPS = new RPS;
            $player1_input = 0;
            $player2_input = 1;

            //act
            $result = $test_RPS->RPS_game($player1_input, $player2_input);

            //Assert
            $this->assertEquals("Player 2 wins", $result);
        }
    }
?>
