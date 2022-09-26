<?php
    interface fruits {
        public function color();
    }

    class mango implements fruits {
        public function color(){
            echo "\nColor of mango is green, yellow or orange.";
        }
    }

    class apple implements fruits{
        public function color(){
            echo "\nColor of apple is green or red .";
        }
        public function weight(){
            echo "weight of one apple around 200 gm.";
        }
    }

    $apple = new apple();
    $mango = new mango();

    $apple->color();
    $mango->color();
    $apple->weight();
?>