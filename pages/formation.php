<!-- récupération d'id de la formation fournie dans l'url paramètres -->
<?php
include ("../includes/formations-data.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 'undefined';
}
?>

<!-- La page d'affichage de la formation -->
<!DOCTYPE html>
<html lang="en">
<!-- Inclusion du head avec un titre -->
<?php $title = "Ecole TechPro";
include '../includes/head.php'; ?>

<body>
    <!-- Inclusion du header -->
    <?php include '../includes/header.php'; ?>

    <!-- Inclusion du navbar -->
    <?php include '../includes/nav.php'; ?>

    <!-- La contunaire de la page -->
    <main class="container">
        <div>
            <?php
            // vérification que l'id est bien spécifiée
            if ($id == "undefined") { // si l'id n'est pas spécifiée dans l'url
                echo '<div class="formation-sections-container">';
                echo "<h1>Oups, echec d'affichage de la formation</h1>";
                echo "<p>Formation ID non spécifiée dans les paramètres de l'URL</p>";
                echo '</div>';
                exit();
            } else if (!isset($formations[$id])) { // si l'id n'existe pas dans la liste des formations
                echo '<div class="formation-sections-container">';
                echo "<h1>Oups, echec d'affichage de la formation</h1>";
                echo "<p>Formation n'existe pas</p>";
                echo '</div>';
                exit();
            }

            // récupération de la formation
            $formation = $formations[$id];
            ?>

            <!-- Affichage de l'image de fond de la formation -->
            <div <?php echo "style='padding: 150px; background-image: url(" . $formation["image"] . "); background-size: cover;'"; ?>></div>

            <!-- La contunaire des sections -->
            <div class="formation-sections-container">
                <br />
                <!-- Affichage du titre de la formation -->
                <h1><?php echo $formation["titre"]; ?></h1>
                <!-- Affichage de la description de la formation -->
                <p><?php echo $formation["description"]; ?></p>
                <br />
                <!-- Affichage des 3 sections de la formation -->
                <div class="formation-cards">
                    <?php
                    $i = 0;
                    foreach ($formation["sections"] as $section) {
                        echo '<section class="formation-card">';
                        echo '<p class="section-name">' . str_repeat("⭐", $i + 1) . " " . $sectionsNames[$i] . '</p>';
                        echo '<h2 class="section-title">' . $section["titre"] . '</h2>';
                        echo '<div class="program"><p>' . $section["programme"] . '</p></div>';
                        echo '<p class="tarif">' . $section["tarifs"] . '</p>';
                        echo '</section>';

                        // Ligne horizontale après chaque section pour la séparation
                        echo $i !== 2 ? '<hr/>' : '';

                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>