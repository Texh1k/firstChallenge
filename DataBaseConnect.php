<?php
require_once 'signup.php';

$servername = "localhost";
$database = "users";
$username = "root";
$password = "";
$mysql = mysqli_connect($servername, $username, $password, $database);
if (!$mysql) {
    die("Не удалось подключиться: " . mysqli_connect_error());
}