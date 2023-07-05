<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width=device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>Форма регистрации</title>
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "/css/style.css">
</head>
<body>
<div class="container mt-4">
<h1>Форма авторизации</h1>
    <form action="authorization.php" method = "post">
        <input type = "text" class = "form-control" name = "email" id = "email" placeholder = "Введите почту"><br>
        <input type = "text" class = "form-control" name = "login" id = "login" placeholder = "Введите логин"><br>
        <input type = "password" class = "form-control" name = "password" id = "login" placeholder = "Введите пароль"><br>
        <button class = "btn btn-success" type = "submit">Авторизоваться</button>
        <p><br>
            Нет аккаунта ? -<a href = "/register.php"> Регистрация</a>
        </p>
    </form>
</body>
</html>