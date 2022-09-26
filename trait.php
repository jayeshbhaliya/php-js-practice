<?php
    trait action{
        public function act(){
            echo "\nIt can run fast on road. ";
        }
    }
    trait colors{
        public function clr(){
            echo "\ncolor of that is red.";
        }
    }

    class audi {
        use action, colors;
        public function msg(){
            echo "\nphp support only single inheritance,trait solve that ,multiple inheritance problem.";
        }
    }

    $audi = new audi();
    $audi->act();
    $audi->clr();
    $audi->msg();
?>