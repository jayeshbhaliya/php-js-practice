<?php

    $file2 = fopen("file2.txt", "w"); //for create or and or write
    $text = "this text from fopen fileHandling<br>\n";

    fwrite($file2,$text);
    $text = "if file not available it can create itself!!<br>\n \n";

    fwrite($file2,$text);
    fclose($file2);

    $file3 = fopen("file2.txt","a");
    $text = "this text from fopen fileHandling a<br>\n";
    fwrite($file3,$text);

    $text = "if we use a than that not earese old data!!!<br>";

    fwrite($file3,$text);
    fclose($file3);
    //  
    $file3 = fopen("file2.txt","r"); //for read
    echo fread($file3,filesize("file2.txt"));
    fclose($file3);

?>