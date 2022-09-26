<?php
    abstract class class1 {
        // abstract public function msg1(): string;
        public function msg2(){
            echo "\nchild class of abstract are can not be private.";
        }
    }
    class class2 extends class1{
        public function msg1(){
            return "\nwe can't use abstarct class direct , that access using child class, abstract class have atleast one abtract method.";

        }
    }


    $class2 = new class2;
    echo $class2->msg1();
    echo $class2->msg2();
?>