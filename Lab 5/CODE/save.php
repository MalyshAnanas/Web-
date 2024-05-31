<?php
function redirectToHome()
{
    header('Location: /index.php');
    exit();
}
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])){
    redirectToHome();
}
redirectToHome();