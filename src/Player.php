<?php

    class Player {

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

    }

?>
