<?php
    $target_folder = "uploads/";
    $b_name = basename($_FILES["file1"]["name"]);
    $isUpload = 1;
    echo 'this is imahe';
    echo $b_name;
    echo 'end';
    $target_file = $target_folder.$b_name;
    $file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $temp_name = $_FILES["file1"]["tmp_name"];
    // echo $temp_name;

    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["file1"]["tmp_name"]);
        if($check !== false){
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
        else{
            echo "File is not image.";
            $uploadOk = 0;
        }
    }
    if ($isUpload == 0) {
        echo "Sorry, your file was not uploaded.";

    } 
    else {
        if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["file1"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }
    



?>