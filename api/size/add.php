<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div style="text-align: center" class="alert alert-<?php

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
    }else{

        echo 'danger"> x( vous avez selectionnez aucune chaussure';
    }
} else {
    echo 'secondary"> Ici vous pouvez noté la taille de vos chaussure';
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
        echo 'success"> Bien modifier';
    }else{
        $q = $db->prepare("INSERT INTO size (pid,count,size) VALUES(:pid,:count,:size)");
        $q->execute([
            'pid' => $pid,
            'count' => $count,
            'size' => $size

        ]);
        echo 'success"> Taille bien noté';
    }
}
?>
</div>
<?php

require_once "form.phtml";

?>