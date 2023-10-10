<?php
$host = "127.0.0.1";
$userDB = "root";
$passDB = "";
$Database = "moresneaks";
$ConnectDB = mysqli_connect($host, $userDB, $passDB, $Database);
try{
    $db = new PDO("mysql:host=" . $host . ";dbname=" . $Database, $userDB, $passDB);
    $db->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
}catch(PDOEXeption $e){
    echo $e;
}


?>