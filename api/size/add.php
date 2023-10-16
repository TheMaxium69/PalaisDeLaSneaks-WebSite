<?php

require_once "form.phtml";



if(isset($_POST["submit"]) && $_POST['submit'] == 'Upload Size') {

    $nbListe = $_POST['nbListe'];

    $counts = [];
    $sizes = [];

    for ($i = 0; $i <= $nbListe; $i++) {

        $nameSize = $_POST['size'.$i];
        $counts[$nameSize] = $_POST['count'.$i];

        $sizes[$i] = $_POST['size'.$i];

    }

    $pid = $_POST['pid'];
    $jsonCount = json_encode($counts);
    $jsonSize = json_encode($sizes);

    if($pid != 0){
        uploadSize($pid, $jsonCount, $jsonSize);
    }
}

function uploadSize($pid, $count, $size)
{

    include "../more/db.php";

    $requeteRecup = $db->prepare("SELECT * FROM size WHERE pid=:pid");
    $requeteRecup->execute(['pid' => $pid]);
    $resultRecup = $requeteRecup->fetch();

    if (!empty($resultRecup)) {
        $q = $db->prepare("UPDATE size SET count=:count, size=:size WHERE size.pid = :pid");
        $q->execute([
            'pid' => $pid,
            'count' => $count,
            'size' => $size
        ]);
        echo "Bien modifier";
    }else{
        $q = $db->prepare("INSERT INTO size (pid,count,size) VALUES(:pid,:count,:size)");
        $q->execute([
            'pid' => $pid,
            'count' => $count,
            'size' => $size

        ]);
        echo "Taille bien noté";
    }
}
