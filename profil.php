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
    <?php if (!isset($_SESSION['connected'])): ?>
        <?php require_once ('templates/error.php'); ?>
    <?php else: ?>
    <div class="flex infos">
        <img src="images/photo-user.PNG" alt="">
        <h2>Le grand lecteur</h2>
        <p>Nationalité: Klingon</p>
        <p>99 ans</p>
        <p>Sexe feminin</p>
        <p>nIb quvmoH chaw nuQ pIqaD way mIQ SeHlaw tungHa' taS, ghor jatIh wanI' pab wuv qugh ghoma' jIv. Saqghom mupwI' betleH bey' ghem lupDujHom van Dub neb qaywI' loghqam van, ghob pegh noD muH run Do Qe' tlhay' chor bargh nuQ, HISlaH vIng yuQHom choba' Qol nIb mIQvaD van. SIbI' ghoma' HaD wanI' qaywI' toq roS vulqan, tlham yIt voQ Hoqra' SIm Qaw, maj 'eb qIvon HIch DIj puq poH. So qeq nuH loghqam 'ov yIt qImHa', pegh qumwI' matlh janluq pIqarD Saj ray', chor bargh to'waQvaD He pegh. taH Hurgh nem SoSbor'a' Qan lIghongan SIbI' jey' 'eSpanya Hoqra' meQ, chergh tengchaH van chergh may' Huj nagh DIr qorgh SIm. maj poQ poj woj chor bargh betleH bey' lev maj nISwI' HIch jIj, chaj Dum poQ qegh vemmoH lengwI' ghubDaQ Hurgh, neSlo' He leH ghew baQ yIt rejmorgh</p>
    </div>
    <div class="flex choice">
            <form class="flex" action="/controllers/user_profil.php" method="POST">
                <div class="flex form">
                    <p>Tu veux le genre?</p>
                    <label for="">Oui</label>
                    <input type="radio" name="genre" value="1" <?= $_SESSION['genre'] ? 'checked' : '' ?>>
                    <label for="">Non</label>
                    <input type="radio" name="genre" value="0" <?= !$_SESSION['genre'] ? 'checked' : '' ?>>
                </div>
                <div class="flex form">
                    <p>Tu veux l'année?</p>
                    <label for="">Oui</label>
                    <input type="radio" name="year" value="1" <?= $_SESSION['year'] ? 'checked' : '' ?>>
                    <label for="">Non</label>
                    <input type="radio" name="year" value="0" <?= !$_SESSION['year'] ? 'checked' : '' ?>>
                </div>
                <div class="flex form">
                    <p>Tu veux la cible?</p>
                    <label for="">Oui</label>
                    <input type="radio" name="cible" value="1" <?= $_SESSION['cible'] ? 'checked' : '' ?>>
                    <label for="">Non</label>
                    <input type="radio" name="cible" value="0" <?= !$_SESSION['cible'] ? 'checked' : '' ?>></div>
                <div>
                    <button class="button" type="submit">Valider.</button>
                </div>
            </form>
    </div>
<?php endif ?>
</main>

    </body>
</html>
