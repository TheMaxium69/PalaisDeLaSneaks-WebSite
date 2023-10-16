<?php

require_once "form.phtml";



if(isset($_POST["submit"]) && $_POST['submit'] == 'Upload Size') {

    $nbListe = $_POST['nbListe'];

    $sizes = [];

    for ($i = 0; $i <= $nbListe; $i++) {

        $nameSize = $_POST['size'.$i];
        $sizes[$nameSize] = $_POST['count'.$i];

    }

    $pid = $_POST['pid'];
    $jsonSizes = json_encode($sizes);


    if($pid != 0){
        uploadSize($pid, $jsonSizes);
    }
}

function uploadSize($pid, $json)
{

    include "../more/db.php";

    $requeteRecup = $db->prepare("SELECT * FROM size WHERE pid=:pid");
    $requeteRecup->execute(['pid' => $pid]);
    $resultRecup = $requeteRecup->fetch();

    if (!empty($resultRecup)) {
        $q = $db->prepare("UPDATE size SET json=:json WHERE size.pid = :pid");
        $q->execute([
            'pid' => $pid,
            'json' => $json,
        ]);
        echo "Bien modifier";
    }else{
        $q = $db->prepare("INSERT INTO size (pid,json) VALUES(:pid,:json)");
        $q->execute([
            'pid' => $pid,
            'json' => $json
        ]);
        echo "Taille bien noté";
    }
}

function getSize($pid)
{
    include "../more/db.php";

    $requeteRecup = $db->prepare("SELECT * FROM size WHERE pid=:pid");
    $requeteRecup->execute(['pid' => $pid]);
    $resultRecup = $requeteRecup->fetch();
    return $resultRecup;

}

