<?php

    // whileloop
    echo "while loop example: <br>";
    $x = 0;

    echo "numbers :";
    while ($x <= 10) {
        echo " $x ,";
        $x++;
    }

    $x = 0 ;
    echo "<br> <br> <br>";


    // forloop
    echo "for loop example:<br>";
    function multiply($x){  //function 
        return $x*$x;
    }
    for ($x; $x <= 10; $x++) { 
        $y = multiply($x);  //use fn.
        echo " $x * $x is $y; <br>"; 
    }
    echo "<br> <br>";


    // do...while loop
    echo "do...While loop example: <br>";

    $x =0;
    do {
        $z = $x + $x;
        if($x == 5){
            echo "that's 5+5=10 <br>";
            $x++;
            continue;  //continue statment
        }
        if($x == 8){
            break;   //break
        }
        echo "$x+$x = $z <br>";
        $x++;
    } while ($x <= 10);

    echo "<br> <br>";

    // foreach loop
    echo "foreach loop example: <br>";
    $fruits = array("mango", "apple","orange");

    foreach($fruits as $fr){
        echo "that is $fr <br>";


    }




?>