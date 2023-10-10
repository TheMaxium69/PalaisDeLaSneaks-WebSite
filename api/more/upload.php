<?php
function uploadPicture($pid, $position, $namePicture)
{

    include "db.php";

//    var_dump($pid, $position, $namePicture);

    $picture = [
        '1'=>null,
        '2'=>null,
        '3'=>null
    ];

    $picture[$position] = $namePicture;

    $requeteRecup = $db->prepare("SELECT * FROM picture WHERE pid=:pid");
    $requeteRecup->execute(['pid' => $pid]);
    $resultRecup = $requeteRecup->fetch();

    if (!empty($resultRecup)) {

//        echo "---------------------------------------";
//            var_dump($resultRecup);

            $pictureEdite = [
                '1'=>$resultRecup['picture1'],
                '2'=>$resultRecup['picture2'],
                '3'=>$resultRecup['picture3']
            ];

            $pictureEdite[$position] = $namePicture;

        $q = $db->prepare("UPDATE picture SET picture1=:picture1, picture2=:picture2, picture3=:picture3 WHERE picture.pid = :pid");
        $q->execute([
            'pid' => $pid,
            'picture1' => $pictureEdite['1'],
            'picture2' => $pictureEdite['2'],
            "picture3"=> $pictureEdite['3'],
        ]);



    }else{


        $q = $db->prepare("INSERT INTO picture (pid,picture1,picture2,picture3) VALUES(:pid,:picture1,:picture2,:picture3)");
        $q->execute([
            'pid' => $pid,
            'picture1' => $picture['1'],
            'picture2' => $picture['2'],
            "picture3"=> $picture['3'],
        ]);


    }


}
