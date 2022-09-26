<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
        $_SESSION["model"] = "xuv700"; //defile session variable
        $_SESSION["color"] = "black";

        echo $_SESSION["model"];  // accses session variable data
        print_r($_SESSION);
        //session_unset() remove all variable from session
        // session_destroy() delete session
    ?>
</body>
</html>