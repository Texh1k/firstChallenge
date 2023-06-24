<?php
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST ['password'];
if (strlen($login) < 5 || strlen($login) > 90) {
    echo 'Недопустимая длина';
    exit();
}
?>
