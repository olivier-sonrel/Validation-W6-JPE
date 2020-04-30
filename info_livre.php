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
    <div class="flex infos">
        <h1>HUIS CLOS</h1>
        <img src="images/huisclos.PNG" alt="">
        <p>Un garçon d'étage introduit dans un salon Style Empire, Garcin le journaliste-publiciste, Inès l'ancienne employée des Postes et Estelle, la mondaine. Ainsi débute un hallucinant huis clos. Ils vont se livrer un combat de mots qui leur fera réaliser le sens de la vie et de la mort</p>
    </div>
    <div class="flex infos">
        <?php if (isset($_SESSION['connected'])): ?>
            <?php if ($_SESSION['genre'] == 1): ?>
                <p>Pièce de theatre.</p>
            <?php endif ?>
            <?php if ($_SESSION['year'] == 1): ?>
                <p>Ecrit en 1943.</p>
            <?php endif ?>
            <?php if ($_SESSION['cible'] == 1): ?>
                <p>C'est pour les grands.</p>
            <?php endif ?>
        <?php else: ?>
            <?php require_once ('templates/error.php'); ?>
        <?php endif ?>
    </div>
</main>

    </body>
</html>
