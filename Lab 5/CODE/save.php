<?php
function redirectToHome()
{
    header('Location: /index.php');
    exit();
}
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])){
    redirectToHome();
}
$container = 'db';
$useruser = 'root';
$password = 'itsaBASE';
$database = 'BASE';
$port = 3306;

$babyBASE = new mysqli($container, $useruser, $password, $database, $port);
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$email = $_POST['email'];

$stmt = $babyBASE->prepare("INSERT INTO BASE.ad (email, title, description, category) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss",$email, $title, $description, $category);
$stmt->execute();

$stmt->close();
$babyBASE->close();
redirectToHome();