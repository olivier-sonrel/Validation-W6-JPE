<?php
//var_dump($_POST);

session_start();

$user_name='olivier';
$user_password="zob";

$name = strtolower($_POST['name']);
$password = $_POST['password'];

if ($name == $user_name && $password == $user_password) {
    $_SESSION['genre'] = 1;
    $_SESSION['year'] = 1;
    $_SESSION['cible'] = 1;
    $_SESSION['name'] = $name;
    $_SESSION['connected'] = TRUE;
    header('Location: /');
}
else {
    $_SESSION['name'] = $name;
    header('Location: /login.php');
}




//var_dump($_SESSION);
