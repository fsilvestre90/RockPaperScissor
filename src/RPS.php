<?php
    class RPS
    {

        function RPS_game($player1_input, $player2_input)
        {

            $player1 = new Player($player1_input);
            $player2 = new Player($player2_input);

            // If Playrer1 and Player2 are the same output draw

            if ($player1->getWeapon() === $player2->getWeapon()) {
                return "DRAW!";
            }
            //When Player one chooses rock and player two chooses scissors we
            //We will check both weapon values to make sure rock wins.
            elseif ($player1->getWeapon() < $player2->getWeapon() &&
                    $player1->getWeapon() > $player2->getWeapon()) {

                    return "Player 1 wins";
            }
            //When Player two chooses rock and player one chooses scissors we
            //We will check both weapon values to make sure rock wins.
            elseif ($player1->getWeapon() > $player2->getWeapon() &&
                    $player1->getWeapon() < $player2->getWeapon()) {

                    return "Player 2 wins";
            }
            // Check if player 1 values after other twests is greater
            // then player two
            elseif ($player1->getWeapon() > $player2->getWeapon()){

                    return "Player 1 wins";
            }
            else {
                    return "Player 2 wins";
            }

        }

    }

    class Player
    {
        public $weapon;
        public $player_input;

        public function __construct($player_input) {
            $this->player_input = $player_input;
            $this->setWeapon($player_input);
        }

        function setWeapon($player_input) {
            $weapons = array(
                            array(1,2,"rock"),
                            array(2,3,"paper"),
                            array(3,1,"scissors")
                            );
            $this->weapon = $weapons[$player_input];
        }

        function getWeapon() {
            return $this->weapon;
        }

        function getPlayerInput() {
            return $this->player_input;
        }

        //Stores Player info
        function save(){
            array_push($_SESSION['players'], (int) $this->player_input);
        }
        //Get all
        static function getPlayerInformation(){
            return $_SESSION['players'][0];
        }
        //Delete all
        static function resetPlayerInformation(){
            $_SESSION['players'] = array();
        }
    }
?>
