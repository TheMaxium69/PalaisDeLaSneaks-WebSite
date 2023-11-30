<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div style="text-align: center" class="alert alert-<?php

require_once "upload.php";

//var_dump($_POST);
//
//var_dump($_FILES);
if(isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $pid = $_POST['pid'];
    $nbImage = 0;
    if ($_FILES["fileToUpload1"]["tmp_name"]) {
        $nbImage = $nbImage + 1;
    }
    if ($_FILES["fileToUpload2"]["tmp_name"]) {
        $nbImage = $nbImage + 1;
    }
    if ($_FILES["fileToUpload3"]["tmp_name"]) {
        $nbImage = $nbImage + 1;
    }

    if ($nbImage !== 0 && !empty($pid)) {

        for ($i = 1; $i <= $nbImage; $i++) {

            $uploadOk = 1;

            $namePicture = basename(randomName());
            $target_file = $target_dir . basename($_FILES["fileToUpload" . $i]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $namePictureWithExtend = basename($namePicture) . "." . $imageFileType;
            $target_fileUpload = $target_dir . $namePictureWithExtend;

            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload" . $i]["tmp_name"]);
                if ($check !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
            }

            // Check file size
            if ($_FILES["fileToUpload" . $i]["size"] > 5000000) {
                echo 'danger"> x( Désolé, Votre fichier est trop lourd.';
                $uploadOk = 0;
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                if ($uploadOk == 1){
                    echo 'danger"> x(';
                } else {
                    echo '<br>';
                }
                echo 'Désolé, uniquement JPG, JPEG, PNG & GIF sont autorisé.';
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "<br><small> votre fichier n'est pas envoyé</small>";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload" . $i]["tmp_name"], $target_fileUpload)) {
                    if ($i == 1){
                        echo "success\">";
                    } else {
                        echo "<br> et";
                    }
                    echo " Votre fichier " . htmlspecialchars(basename($_FILES["fileToUpload" . $i]["name"])) . " a bien été upload.";
                    uploadPicture($pid, $i, $namePictureWithExtend);
                } else if (file_exists($target_fileUpload)) {
                    echo 'danger"> x( Le fichier existe déjà veuillez réessayer.';
//                uploadPicture($pid, $i, $namePictureWithExtend);
                } else {
                    echo 'danger"> x( Désolé, un problème est survenue lors de l\'upload.';
                }
            }
        }
    } else {
        echo 'danger"> x( désolé votre fichier n\'a pas été upload. 0 Image Envoyé';
    }
} else {
    echo 'secondary"> Ici vous pouvez mettre les images de vos chaussure';
}

function randomName($length=20){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';
    for($i=0; $i<$length; $i++){
        $string .= $chars[rand(0, strlen($chars)-1)];
    }
    return $string;
}

?>
</div>
<?php

require_once "form.phtml";

?>