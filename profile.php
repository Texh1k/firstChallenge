<!doctype html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width=device-width, user-scalable = no, initial-scale = 1.0, maximum-scale=1.0, minimum-scale = 1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie = edge">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script defer src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity = "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin = "anonymous"></script>

    <title>Профиль</title>
</head>
<body>
<div class = "container mt-4">
    <div class = "alert alert-success" role="alert">
        <strong>Здравствуйте!</strong> Вы оказались на этой странице, потому что прошли авторизацию на сайте, давайте
        заполним небольшую форму.
    </div>
    <form role = "form">
        <div class = "form-group">
            <label for = 'text'></label>
            <input type = "text" class="form-control" placeholder = "Введите фамилию, имя и отчество"><br>
        </div>
        <div class = "input-group">
            <span class = "input-group-text">Расскажите немного о себе.</span>
            <textarea class = "form-control" aria-label = "With textarea"></textarea>
        </div>
        <div class = "form-check">
            <input class = "form-check-input" type = "radio" name = "exampleRadios" id = "exampleRadios1" value = "option1"
                   checked>
            <label class = "form-check-label" for = "exampleRadios1">
                Нажмите на эту радиокнопку
            </label>
        </div>
        <div class = "form-check">
            <input class = "form-check-input" type = "radio" name = "exampleRadios" id = "exampleRadios2" value = "option2">
            <label class = "form-check-label" for = "exampleRadios2">
                Или на эту
            </label>
        </div>
        <div class = "form-check">
            <input class = "form-check-input" type = "radio" name = "exampleRadios" id = "exampleRadios3" value = "option3"
                   disabled>
            <label class = "form-check-label" for = "exampleRadios3">
                Здесь Вы не сможете что-то выбрать )))
            </label>
        </div>
        <div class = "form-check">
            <input class = "form-check-input" type = "checkbox" value="" id = "flexCheckDefault">
            <label class = "form-check-label" for = "flexCheckDefault">
                Флажок 1
            </label>
        </div>
        <div class = "form-check">
            <input class = "form-check-input" type = "checkbox" value = "" id = "flexCheckChecked" checked>
            <label class = "form-check-label" for = "flexCheckChecked">
                Флажок 2
            </label>
        </div>
        <div class = "dropdown">
            <button class = "btn btn-secondary dropdown-toggle" type = "button" id = "dropdownMenuButton1"
                    data-bs-toggle = "dropdown" aria-expanded = "false">
                Поэкспериментируем с выпадающим списком
            </button>
            <ul class = "dropdown-menu" aria-labelledby = "dropdownMenuButton1">
                <li><a class = "dropdown-item" href = "#">Выбираем первое</a></li>
                <li><a class = "dropdown-item" href = "#">Выбираем второе</a></li>
                <li><a class = "dropdown-item" href = "#">И что-нибудь ещё</a></li>
            </ul>
        </div>
        <br>
        <button type = "resetForms" class = "btn btn-danger">Очистить форму</button>
    </form>
</body>
</html>
