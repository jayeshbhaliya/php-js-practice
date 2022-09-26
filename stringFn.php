<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Fn.</title>
</head>
<body>
<?php
    $str = "hello jb's world!";
    echo $str;
    var_dump($str);
    echo "  <br>" ;
    $str1 = addcslashes($str, 'w'); // for add slashes 
    echo $str1;
    echo "  <br> " ;
    echo addslashes($str);
    echo "  <br> " ;
    $str2 = bin2hex($str); // binery to hex
    echo $str2;
    echo "<br>";
    var_dump ($str2);
    echo "  <br> " ;
    echo hex2bin($str2);
    echo "  <br> " ;
    echo chop($str, 'world!'); // remove spesific word
    echo "  <br> " ;
    echo chr(54);
    echo "  <br> " ;
    echo chunk_split($str, 2, "."); // divede part and add any value
    echo "  <br> " ;
    $str3 = convert_uuencode($str); // encode uu code
    echo $str3;
    echo "  <br> " ;
    echo convert_uudecode($str3); //decode uucode
    echo "  <br> " ;
    echo "  <br> " ;
    // echo crypt($str);
    echo "  <br> " ;
    print_r( explode(' ',$str) ); // convert str into array
    echo "  <br> " ;
    echo ltrim($str, "hello!");
    echo "  <br> " ;

    $file1 = fopen("file1.txt", "w");  //open file and permit write

    echo fprintf($file1, "Hello World %s", $str); // print in file

    echo readfile("file2.txt");



?>
</body>
</html>
