<?php

require __DIR__ .'/../vendor/autoload.php';

$dotenv=\Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$serverName=$_ENV['DB_SERVERNAME'];
$userName=$_ENV['DB_USERNAME'];
$password=$_ENV['DB_PASSWORD'];
$dbName=$_ENV['DB_NAME'];

$conx=mysqli_connect($serverName, $userName, $password, $dbName);
// if (!$conx) {
//     die('failed'.mysqli_connect_error());
// } else {
//     echo'connected';
// }


?>