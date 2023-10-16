<?php

require_once "form.phtml";



if(isset($_POST["submit"])) {

    $test = [
        'test' => "test",
        'test1' => "test1",
        'test2' => "test2"
    ];

    $test2 = json_encode($test);

    $pid = $_POST['pid'];
    if($pid !== 0){
        uploadSize($pid, $test2);
    }
}

function uploadSize($pid, $json)
{

    include "../db.php";

    $requeteRecup = $db->prepare("SELECT * FROM size WHERE pid=:pid");
    $requeteRecup->execute(['pid' => $pid]);
    $resultRecup = $requeteRecup->fetch();

    if (!empty($resultRecup)) {
        $q = $db->prepare("UPDATE size SET json=:json WHERE picture.pid = :pid");
        $q->execute([
            'pid' => $pid,
            'json' => $json,
        ]);
    }else{
        $q = $db->prepare("INSERT INTO size (pid,json) VALUES(:pid,:json)");
        $q->execute([
            'pid' => $pid,
            'json' => $json
        ]);
    }
}

function getSize($pid)
{
    include "../db.php";

    $requeteRecup = $db->prepare("SELECT * FROM size WHERE pid=:pid");
    $requeteRecup->execute(['pid' => $pid]);
    $resultRecup = $requeteRecup->fetch();
    return $resultRecup;

}

