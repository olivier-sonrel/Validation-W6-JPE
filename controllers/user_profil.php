<?php
// var_dump($_POST);
session_start();

$genre = $_POST['genre'];
$year = $_POST['year'];
$cible = $_POST['cible'];

$_SESSION['genre'] = $genre;
$_SESSION['year'] = $year;
$_SESSION['cible'] = $cible;

header('Location: /info_livre.php');

// var_dump($_SESSION);
