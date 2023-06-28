<?php

$servername = "localhost";
$database = "users";
$username = "root";
$password = "";
$mysql = mysqli_connect($servername, $username, $password, $database);
if (!$mysql) {
    die("Не удалось подключиться: " . mysqli_connect_error());
}
mysqli_query($mysql,"SET NAMES utf8");

?>
