<?php
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);
$servername = "localhost";
$database = "users";
$username = "root";
$pass = "";
$mysql = mysqli_connect($servername, $username, $pass, $database);
$queryPass = "SELECT `password` FROM `users` WHERE `login` = '$login' AND `email` = '$email'";
$passDb = mysqli_fetch_array(mysqli_query($mysql, $queryPass));
if (($passDb['password']) == $password) {
    echo "Пользователь с таким паролем найден";
    header('Location: ../profile.php');
} else {
    header('location: ../incorrectData.php');
}