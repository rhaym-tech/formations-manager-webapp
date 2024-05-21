<?php
    function isValidID($id) {
        return in_array($id, Array("bereautique", "cybersecurity", "phonerepair"));
    }

    include("../includes/formations-data.php");
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = 'undefined';
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php $title = "Training Page"; include '../includes/head.php'; ?>
<body>
    <?php include '../includes/header.php'; ?>

    <div class="container formation-page-container">
        <?php include '../includes/nav.php'; 
    ?>

        <div class="formations-container">
            <?php
                if($id == "undefined") {

                } else if(!isValidID($id)) {
                    echo "<h1>Error:</h1>";
                    echo "<p>The provided formation ID '$id' is not valid, retry again!</p>";

                    exit();
                }
                $formation = $formations[$id];

                echo "<img src='" . $formation["image"] . "' style='width: 100%; height: auto; border-radius: 10px;'/>";
            ?>
            <h1><?php echo $formation["titre"]; ?></h1>
            <p><?php echo $formation["description"]; ?></p>
            <br/>
            <div class="formation-cards">
                <?php
                    foreach($formation["sections"] as $section) {
                        echo '<div class="formation-card">';
                            echo '<h2 class="section-title">'. $section["titre"] .'</h2>';
                            echo '<div class="program"><p>'. $section["programme"] .'</p></div>';
                            echo '<div class="tarif">' . $section["tarifs"] . '</div>';
                        echo '</div>';

                        echo '<hr/>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
