<?php
    interface game4 {
        public function start();
    }
    class game implements game4{
        public $g1;
        public $g2;
        const g3 = "that is g3";
        public function start(){
            echo "This $this->g1 and $this->g2 game are start.\n"; 
        }
        public function __construct(){
            echo "This msg from constructor.\n";
        }
        public function __destruct()
        {
            echo "This msg from destructor\n";
        }
    }
    trait game3{
        public function tt(){

            echo "This msg from trait\n";
        }
    }
    class game2 extends game{
        use game3;
        public function play($name){
            echo self::g3;
            echo " This $name game played.\n";
        }

    }
    $game2 = new game2;
    $game2->g1 = "bgmi";
    $game2->g2 = "ff";
    $game2->tt();
    $game2->start();
    $game2->play("mili");
?>