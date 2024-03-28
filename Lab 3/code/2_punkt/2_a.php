<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2_a</title>
    <style>
        body {
            background: #74afff;
            font-size: 23px;
            font-family: "Comic Sans MS", serif;
        }
    </style>
</head>
<body>
<form method="post">
    <label>
        Введите текст <br> <br>
        <textarea name="text">

        </textarea>
    </label>
    <br> <input type="submit">
</form>
<br> <?php
$text ="";
if (!empty($_POST['text'])) {
    $text = $_POST['text'];
}
$Biba = array();
$count = preg_match_all('/[a-z0-9а-яё.]+/ui', $text, $Biba);
echo 'Количество слов: '.$count."<br>";
$len=mb_strlen($text);
echo 'Длина строки: '.$len."<br>";
?>
</body>
</html>
