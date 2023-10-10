<?php
$host = "127.0.0.1";
$userDB = "root";
$passDB = "";
$Database = "moresneaks";

$pdo = new PDO("mysql:host=" . $host . ";dbname=" . $Database, $userDB, $passDB, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_PERSISTENT
]);
?>