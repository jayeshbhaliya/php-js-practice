<?php
    function callback($str){
        return strtoupper($str);

    }
    // callback fn use for call function in functon

    $fruits = array("mango","apples","oranges");

    $strlength = array_map("callback", $fruits);
    print_r($strlength);
?>

