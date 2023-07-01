<?php
require_once 'DataBaseConnect.php';
$login = filter_var(trim($_POST['login']));
$email = filter_var(trim($_POST['email']));
$password = filter_var(trim($_POST['password']));
$password_confirm = filter_var(trim($_POST['password_confirm']));
if ($password === $password_confirm) {
    mysqli_query($mysql,"INSERT INTO `users` (`email`, `login`, `password`) VALUES ('$email', '$login', '$password')");
} else {
    die ('Пароли не совпадают');
}