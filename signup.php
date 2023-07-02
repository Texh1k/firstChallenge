<?php
session_start();
require_once 'DataBaseConnect.php';
$login = filter_var(trim($_POST['login']));
$email = filter_var(trim($_POST['email']));
$password = filter_var(trim($_POST['password']));
$password_confirm = filter_var(trim($_POST['password_confirm']));
if ($password === $password_confirm) {
    $password = md5($password);
    mysqli_query($mysql,"INSERT INTO `users` (`email`, `login`, `password`) VALUES ('$email', '$login', '$password')");
    header ('Location: html/index.php');
} else {
    die("Не удалось подключиться: не совпадают пароли. " . mysqli_connect_error());
}