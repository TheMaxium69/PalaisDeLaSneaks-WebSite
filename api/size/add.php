<?php

require_once "form.phtml";

$test = [
    'test' => "test",
    'test1' => "test1",
    'test2' => "test2"
];

$test2 = json_encode($test);

var_dump($test2);

$test3 = json_decode($test2);

var_dump($test3);


if(isset($_POST["submit"])) {

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


