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
$_SESSION['data'] = array();

if (!empty($_POST['name'])) {
    $_SESSION['data'][] = $_POST['name'];
}
if (!empty($_POST['age'])) {
    $_SESSION['data'][] = $_POST['age'];
}
if (!empty($_POST['salary'])) {
    $_SESSION['data'][] = $_POST['salary'];
}
if (!empty($_POST['home'])) {
    $_SESSION['data'][] = $_POST['home'];
}
echo '<ul>';
foreach ($_SESSION['data'] as $info) {
    echo '<li>' . $info . '</li>';
}
echo '</ul>';
?>
</body>
</html>