<?php
$servername = "localhost";
$database = "users";
$username = "root";
$pass = "";
$mysql = mysqli_connect($servername, $username, $pass, $database);
if (!$mysql) {
    die("Не удалось подключиться " . mysqli_connect_error());
}

$login = filter_var($_POST['login']);
$email = filter_var($_POST['email']);
$password = filter_var($_POST['password']);
    $password = md5($password);
    $query = $mysql->query("INSERT INTO `users` (`email`, `login`, `password`) VALUES ('$email', '$login', '$password')");
