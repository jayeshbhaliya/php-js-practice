<?php
    class abc{
        public static function abc1(){     //static mathod
            echo "static method is accsess without creat object of its class.\n";
        }
    }
    class xyz extends abc{
        public static $sqrt2 = 1.74;  //static property
        function __construct()
        {
            parent::abc1();
        }
    }

    new xyz();
    echo "<br>\n";
    abc::abc1();
    echo xyz::$sqrt2;
?>