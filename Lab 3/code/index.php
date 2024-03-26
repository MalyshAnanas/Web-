<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 3.1</title>
    <style>
        body {
            background: #ddd0ff;
            font-size: 23px;
            font-family: "Comic Sans MS", serif;
        }
    </style>
</head>
<body>
<?php
// Пункт 1.a
echo "~~~~Пункт №1.a~~~~" . "<br>";
$regExp = '/a[a-z]{2}b/i';
$str = 'ahb acb aeb aeeb adcb axeb';
$Dudu = array();
$cnt = preg_match_all($regExp, $str, $Dudu);
echo "Найдено подстрок: " . $cnt . "<br>";
var_dump($Dudu);

// Пункт 1.b
echo "<br>" . "~~~~Пункт №1.b~~~~" . "<br>";
$regExp = '/[0-9]/';
$str = 'a1b2c3';
$Kuromi = array();
$result = preg_replace_callback($regExp, function ($Kuromi) {
    return pow(intval($Kuromi[0]), 3);
},
    $str);
echo "Новая строчка: ". $result;
?>
</body>
</html>


