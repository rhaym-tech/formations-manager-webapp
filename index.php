<!DOCTYPE html>
<html lang="en">
<?php $title = "Ecole.uwu"; include 'includes/head.php'; ?>
<body>
    <?# Including header ?>
    <?php include 'includes/header.php'; ?>
    
    <div class="container">
        <?# Including nav bar ?>
        <?php include 'includes/nav.php'; ?>

        <div class="sections-container">
            <? //* Including articles section ?>
            <?php include 'compontents/articlesCards.php'?>

            <? //* Including comments section ?>
            <?php include 'compontents/comments.php'; ?>
            
        </div>
        
        <aside>
            <h1>Promotions</h1>
            <marquee direction="up" scrollamount="2">
                <p>Promotion 1: Réduction des tarifs pour CyberSecurity formation</p>
                <br/>
                <p>Promotion 2: Offre spéciale pour Bereautique formation</p>
                <br/>
                <p>Promotion 3: Réductions selon le nombre d'apprentis...</p>
            </marquee>
        </aside>
    </div>
</body>
</html>