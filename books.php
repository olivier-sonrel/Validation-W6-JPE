 <?php require_once('templates/array_books.php'); ?>

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
        <main>
            <table>
                <?php foreach ($arrayBook as $book) :?>
                    <div class="ligne flex">
                        <img class="couv" src="<?= $book['image'] ?>" alt="image">
                        <h2><?= $book['title']?></h2>
                        <p><?= $book['description']?></p>
                    </div>
                <?php endforeach ?>
            </table>
        </main>
    </body>
</html>
