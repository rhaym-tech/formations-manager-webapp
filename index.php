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
            <section>
                <h2>Section 1</h2>
                <article>
                    <h3>Formation 1</h3>
                    <p>tiri brk. zzzklllllkmsjqifjdlfkslgksjdfmkdfjdlfkjsdslkjdsglkdslksslkgdslkshlshdsk kdjflkdsjfslkf lkdjflkshflk lkqfhlkdfhl hlkqdflkd ldhfdk jdkjf jsjsdoz fjj jjfjjsld jjjsjd</p>
                </article>
                <article>
                    <h3>Formation 2</h3>
                    <p>kif kif.</p>
                </article>
                <article>
                    <h3>Formation 3</h3>
                    <p>same shit goes here.</p>
                </article>
            </section>

            <? // Including comments section ?>
            <?php include 'compontents/comments.php'; ?>
            
        </div>
        
        <aside>
            <h1>Promotions</h1>
            <marquee direction="up" scrollamount="2">
                <p>Promotion 1: Réduction des tarifs pour...</p>
                <p>Promotion 2: Offre spéciale pour...</p>
                <p>Promotion 3: Réductions selon le nombre d'apprentis...</p>
            </marquee>
        </aside>
    </div>
</body>
</html>