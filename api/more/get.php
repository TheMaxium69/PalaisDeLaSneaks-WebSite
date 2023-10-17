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


function getGroupByGid($gid){

    $groupsAll = productGroup();

    var_dump($groupsAll);

    $gid = 1;




var_dump($name);

//    return $name


}

