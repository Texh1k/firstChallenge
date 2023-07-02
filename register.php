<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрации</title>
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "/css/style.css">
</head>

<body>
<div class = "container mt-4">
    <h1>Форма регистрации</h1><br>
    <form action="signup.php" method = "post" enctype="multipart/form-data" >
        <input type = "text" class = "form-control" name = "login" id = "login" placeholder = "Введите логин"><br>
        <input type = "text" class = "form-control" name = "email" id = "email" placeholder = "Введите вашу почту"><br>
        <input type = "password" class = "form-control" name = "password" id = "password" placeholder = "Введите пароль"><br>
        <button class = "btn btn-outline-danger" type = "submit">Регистрация</button>

    </form>
</body>

</html>
