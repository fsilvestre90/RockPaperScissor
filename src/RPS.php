<?php
class RPS
{
    private $player_weapon;
    private $weapons = array(
        array(1,2,"rock"),
        array(2,3,"paper"),
        array(3,1,"scissors")
        );

    function __construct($weapon_choice) {
        $this->player_weapon = $weapons[$weapon_choice];
    }

    function getPlayerWeapon() {
        return $this->player_weapon;
    }


    function RPS_game($player1_input, $player2_input)
    {
        // Values for the weapons


        // Player weapons
        $player1_weapon = $weapons[$player1_input];
        $player2_weapon = $weapons[$player2_input];

        // If Playrer1 and Player2 are the same output draw

        if($player1_weapon === $player2_weapon){
            return "DRAW!";
        }
        //When Player one chooses rock and player two chooses scissors we
        //We will check both weapon values to make sure rock wins.
        elseif ($player1_weapon[0] < $player2_weapon[0] &&
                $player1_weapon[1] > $player2_weapon[1]) {

                return "Player 1 wins";
        }
        //When Player two chooses rock and player one chooses scissors we
        //We will check both weapon values to make sure rock wins.
        elseif ($player1_weapon[0] > $player2_weapon[0] &&
                $player1_weapon[1] < $player2_weapon[1]) {

                return "Player 2 wins";
        }
        // Check if player 1 values after other twests is greater
        // then player two
        elseif ($player1_weapon[0] > $player2_weapon[0]){

                return "Player 1 wins";
        }
        else{
                return "Player 2 wins";
        }


    }
}
?>
