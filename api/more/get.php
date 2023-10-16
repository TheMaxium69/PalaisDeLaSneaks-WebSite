<?php

function getPicture($pid){

    include "db.php";

    $requeteRecup = $db->prepare("SELECT * FROM picture WHERE pid=:pid");
    $requeteRecup->execute(['pid' => $pid]);
    $resultRecup = $requeteRecup->fetch();

    return $resultRecup;
}

function getSize($pid)
{

    include "db.php";

    $requeteRecup = $db->prepare("SELECT * FROM size WHERE pid=:pid");
    $requeteRecup->execute(['pid' => $pid]);
    $resultRecup = $requeteRecup->fetch();
    return $resultRecup;

}

