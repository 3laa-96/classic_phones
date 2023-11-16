<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "classic_phones";

function connect()
{
    global $servername, $username, $password, $db;

    $conn = new mysqli($servername, $username, $password, $db);
    return $conn;
}

function connectPDO()
{
    global $servername, $username, $password, $db;
    $dsn = "mysql:host=$servername;dbname=$db;charset=UTF8";
    try {
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $pdo = new PDO($dsn, $username, $password, $options);
        return $pdo;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
        die();
    }
}
?>