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
echo "<br><br>" . "~~~~Пункт №1.b~~~~" . "<br>";
$regExp = '/[0-9]/';
$str = 'a1b2c3';
$Kuromi = array();
$result = preg_replace_callback($regExp, function ($Kuromi) {return pow(intval($Kuromi[0]), 3);}, $str);
echo "Новая строчка: ". $result."<br>";

// Пункт 2.a
echo "<br>" . "~~~~Пункт №2.a~~~~" . "<br>";
?>
<a href="2_punkt/2_a.php">Второе задание. Пункт а</a>
<p> ~~~~Пункт №2.b~~~~ <br> </p>
<a href="2_punkt/2_b.php">Второе задание. Пункт b</a>
<p> ~~~~Пункт №2.c~~~~ <br> </p>
<a href="2_punkt/2_c.php">Второе задание. Пункт c</a>
<p>  ~~~~Пункт №3~~~~ <br> </p>
<a href="3_punkt/3.php">Третье задание</a>
</body>
</html>


