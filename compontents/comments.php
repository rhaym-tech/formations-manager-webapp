<?php
// Inclure le fichier de connexion à la base de données
include 'database/db_connection.php';

// Récupérer les commentaires de la base de données
$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $db->query($sql);
?>

<section>
    <h2>Commentaires [<?php echo $result->num_rows; ?>]</h2>
    <div id="comments" class="comments">
        <?php
        // Vérifier s'il y a des commentaires
        if ($result->num_rows > 0) {
            // Afficher les données de chaque ligne
            while ($row = $result->fetch_assoc()) {
                echo '<div class="comment">';
                echo '<div class="comment-header">';
                echo '<div class="user-pfp"></div>';    
                echo '<div>';
                echo '<div class="user-email"><strong>' . $row['email'] . '</strong></div>';
                echo '<div class="comment-timestamp">' . $row['created_at'] . '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="comment-body">';
                echo '<p>' . $row['comment'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Pas encore de commentaires.";
        }

        // Fermer le jeu de résultats
        $result->close();

        // Fermer la connexion à la base de données
        $db->close();
        ?>
    </div>
    <div class="new-comment">
        <h3>Envoyer un commentaire</h3>
        <form id="comment-form" action="api/submit_comment.php" method="POST">
            <input type="email" name="email" id="email" placeholder="Votre adresse email" required>
            <textarea name="comment" id="comment" placeholder="Votre commentaire" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</section>
