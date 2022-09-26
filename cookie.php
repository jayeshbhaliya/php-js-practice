<?php
$cookie_name = "user";
$cookie_value = "jayesh";
setcookie($cookie_name, $cookie_value, time()+(86400 * 90),"/");
 // if we want to delete cookie then set time in previous

setcookie("user2","ravi",time()-(86400*5),"/")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php
    if (isset($_COOKIE[$cookie_name])) {
        echo "cookie is set\n";
        echo 24*60*60; //86400 second in day
    }
    else{
        echo "cookie is not set!.";
    }

    if (isset($_COOKIE["user2"])) {
        echo "secondcookie is set\n";
        
    }
    else{
        echo "second cookie is not set!.";
    }
    ?>
</body>
</html>