<!-- La page d'accueil de l'école -->

<!DOCTYPE html>
<html lang="en">
<!-- Inclusion du head avec un titre -->
<?php $title = "Ecole.uwu"; include 'includes/head.php'; ?>

<body>
    <!-- Inclusion du header -->
    <?php include 'includes/header.php'; ?>
    
    <!-- La contunaire de la page -->
    <main class="container">
       <!-- Inclusion du navbar -->
        <?php include 'includes/nav.php'; ?>

        <div class="container">
            <!-- La contunaire des sections -->
            <div class="sections-container">
                <!-- Inclusion des articles -->
                <?php include 'compontents/articlesCards.php'?>

                <!-- Inclusion du section de commentaires -->
                <?php include 'compontents/comments.php'; ?>
            </div>

            <!-- Inclusion du aside de promotions -->
            <?php include 'includes/aside.php'; ?>
        </div>
    </main>
</body>
</html>