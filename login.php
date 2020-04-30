<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="icon" type="image/png" href="/images/favicon.png">
        <title>Validation W6</title>
    </head>
    <body>

<?php require_once ('templates/header.php'); ?>

<main class="flex">
    <form class="flex" action="controllers/connection.php" method="POST">
        <div class="button">
            <label for="name">Nom: </label>
            <input type="text" name="name" placeholder="Nom" value="<?= $_SESSION['name'] ?? '' ?>">
        </div>
        <div class="button">
            <label for="password">Mot de passe: </label>
            <input type="password" name="password">
        </div>
        <button class="button" type="submit" name="button">Send.</button>
    </form>
</main>

   </body>
</html>
