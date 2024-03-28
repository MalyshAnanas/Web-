<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
    <style>
        body {
            background: #ffbc95;
            font-size: 23px;
            font-family: "Comic Sans MS", serif;
        }
    </style>
</head>
<body>
<?php
if (!empty($_POST['surname'])) {
    $_SESSION['surname'] = $_POST['surname'];
}
if (!empty($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}
if (!empty($_POST['age'])) {
    $_SESSION['age'] = $_POST['age'];
}
echo "<br>"."Фамилия пользователя: ".$_SESSION['surname'];
echo "<br>"."Имя пользователя: ".$_SESSION['name'];
echo "<br>"."Возраст пользователя: ".$_SESSION['age'];
?>
</body>
</html>