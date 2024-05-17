<?php
// Include database connection file
include 'database/db_connection.php';

// Retrieve comments from database
$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $db->query($sql);
?>
<section>
    <h2>Commentaires [<?php echo $result->num_rows; ?>]</h2>
    <div class="comments">
        <?php
        // Check if there are any comments
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="comment">';
                echo '<div class="comment-header">';
                echo '<div class="user-pfp"></div>';    
                echo '<div>';
                echo '<div class ="user-email"><strong>' . $row['email'] . '</strong></div>';
                echo '<div class ="comment-timestamp">' . $row['created_at'] . '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="comment-body">';
                echo '<p>' . $row['comment'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No comments yet.";
        }

        // Close result set
        $result->close();

        // Close database connection
        $db->close();
        ?>
    </div>
    <div class="new-comment">
        <h3>Envoyer un commentaire</h3>
        <form action="api/submit_comment.php" method="POST">
            <input type="email" name="email" id="email" placeholder="Votre adresse email" required>
            <textarea name="comment" id="comment" placeholder="Votre commentaire" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    
    </div>
</section>
