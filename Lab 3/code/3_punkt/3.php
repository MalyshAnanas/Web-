<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3</title>
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
        <textarea name="description" placeholder="Mymelody"></textarea>
    </label>
    <label>
        <br> <input type="submit">
    </label>
</form>
<?php
$categories = array('fu', 'norm', 'cool');
foreach ($categories as $category) {
    $fileList = scandir("categories/$category");
    foreach ($fileList as $file) {
        if ($file != "." && $file != '..') {
            $title = substr($file, 0, strlen($file) - 4);
            $content = file_get_contents("categories/$category/$file");
            echo "<p>$category -> $title -> $content</p>";
        }
    }
}
?>
</body>
</html>
