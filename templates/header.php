<?php
session_start();
?>

<header>
    <nav>
        <ul class="flex">
            <li class="flex button"><a href="/">Accueil</a></li>
            <li class="flex button"><a href="books.php">Bouquin</a></li>
                <?php if (isset($_SESSION['connected'])): ?>
                    <div class="">
                        <ul class="flex name-over buton">
                            <li class="flex button"><p class="name"><?= ucfirst($_SESSION['name']) ?></p></li>
                            <li class="flex name-child button"><a href="/controllers/logout.php">Logout</a></li>
                            <li class="flex name-child button"><a href="/profil.php">Profil</a></li>
                            <li class="flex name-child button"><a href="info_livre.php">Livre particulié</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <li class="flex button"><a href="login.php">Login</a></li>
                <?php endif ?>

        </ul>
    </nav>
</header>
