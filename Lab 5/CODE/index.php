<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dushnilka</title>
    <style>
        body {
            background: #74afff;
            font-size: 23px;
            font-family: "Comic Sans MS", serif;
        }
    </style>
</head>
<body>
<form action="save.php" method="post">
    <label>
        <br> Введите Ваш email:
        <input name="email" required type="email" placeholder="****@vk.com">
    </label>
    <label>
        <br> Выберете категорию:
        <select name="category" required>
            <option value="fu">Так себе</option>
            <option value="norm">Нормально</option>
            <option value="cool">Крутой</option>
        </select>
    </label>
    <label>
        <br> Заголовок:
        <input name="title" required type="text" placeholder="Pikachu">
    </label>
    <label>
        <br>Описание:
        <textarea name="description" placeholder="Kuromi"></textarea>
    </label>
    <label>
        <br> <input type="submit">
    </label>
</form>
<?php
//for ($i = 1; $i < sizeof($response->getValues()); $i++) {
//    $valuesInRow = array();
//    echo "<p>";
//    for ($j = 0; $j < 2; $j++) {
//        if ($j < sizeof($response->getValues()[$i])) {
//            echo  $response->getValues()[$i][$j]." ->  ";
//        } else {
//            echo "   ";
//        }
//    }
//    if (2 < sizeof($response->getValues()[$i])) {
//        echo $response->getValues()[$i][2];
//    }
//    echo "</p>";
//}
?>
</body>
</html>
