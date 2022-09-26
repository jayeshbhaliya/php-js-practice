<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
<?php
    $name=$nameErr=$email=$emailErr=$number=$numberErr=$gender=$genderErr="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } 
        else {
            $name = $_POST["name"];
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } 
        else {
            $email = $_POST["email"];
        }

        if (empty($_POST["number"])){
            $numberErr = "Number is required";
        }
        else{
            $number = $_POST["number"];
        }

        if (empty($_POST["gender"])){
            $genderErr = "please select Gender";
        }
        else{
            $gender = $_POST["gender"];
        }

        
    }
    ?>
    <h1>User Form  </h1> 
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" id="name"> 
        <span><?php echo $nameErr;?></span><br> <br>
        E-mail: <input type="email" name="email" id="email"> 
        <span><?php echo $emailErr;?></span><br> <br>
        Mobile number: <input type="text" name="number" id="number"> 
        <span><?php echo $numberErr;?></span><br> <br>
        Gender: <input type="radio" name="gender" id="gender" value="male" >Male
                <input type="radio" name="gender" id="gender" value="female" > Female 
                <span><?php echo $genderErr;?></span> <br> <br>
        <!-- <button> <input type="submit" name="submit" value="Submit> Submit</button> -->
        <input type="submit" name="submit" value="Submit">
        


    </form>
    
    <?php
        echo " You enter <br> name: $name , <br> Email: $email , <br> number: $number , <br> Gender: $gender <br>";
    ?>
    <?php 
        echo date("d/m/Y")." ".date("h:i:sa"); 
    ?>

    
</body>
</html>