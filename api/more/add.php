<?php

require_once "upload.php";
require_once "form.phtml";

//var_dump($_POST);
//
//var_dump($_FILES);

$target_dir = "uploads/";
$pid = $_POST['pid'];
$nbImage = 0;
if ($_FILES["fileToUpload1"]["tmp_name"]){ $nbImage = $nbImage + 1; }
if ($_FILES["fileToUpload2"]["tmp_name"]){ $nbImage = $nbImage + 1; }
if ($_FILES["fileToUpload3"]["tmp_name"]){ $nbImage = $nbImage + 1; }

if ($nbImage !== 0 && !empty($pid)){

    for ($i = 1; $i <= $nbImage; $i++){

        $uploadOk = 1;
        $target_file = $target_dir . basename($_FILES["fileToUpload".$i]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $namePicture = basename($_FILES["fileToUpload".$i]["name"]);

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload". $i]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($_FILES["fileToUpload".$i]["size"] > 50000000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload". $i]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload". $i]["name"])). " has been uploaded.";
                uploadPicture($pid, $i, $namePicture);
            } else if (file_exists($target_file)) {
                echo "<strong>Sorry, file already exists.</strong>";
                uploadPicture($pid, $i, $namePicture);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
} else {
    echo "Sorry, your file was not uploaded.";
}