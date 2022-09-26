<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validate</title>
</head>

<body onload="checkCookies()">
    <form name="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
        <label for="name">Name</label>
        <input type="text" name="name"  >
        <label for="lname">Last name</label>
        <input type="text" name="lname">
        <input type="submit" value="submit">

    </form>
    <p id="err"></p>
    <!-- <p id="demo"></p> -->
    <script>
        function validateForm() {
            let x = document.forms["form1"]["name"].value;
            let y = document.forms["form1"]["lname"].value;

            if (x == "") {
                document.getElementById("err").innerHTML = "Please enter first name !!";
                return false;
            }
            if (y == "") {
                document.getElementById("err").innerHTML = "Please enter last name !!";
                return false;
            }
        }

        function checkCookies() {
            var text = "";
            if (navigator.cookieEnabled == true) {
                text = "Cookies are enabled.";
            } else {
                text = "Cookies are not enabled.";
            }
            document.getElementById("demo").innerHTML = text;
        }
    </script>
    <?php
    $fname = $lname = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["name"];
        $lname = $_POST["lname"];
    }
    echo "you name is $fname $lname";
    ?>
</body>

</html>