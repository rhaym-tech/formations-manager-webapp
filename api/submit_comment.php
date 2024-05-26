<?php
// Charger le fichier de connexion à la base de données
include '../database/db_connection.php';

// Fonction pour rediriger vers une page
function redirect($url) {
    header("Location: $url#comments");
    exit();
}

// Verifier si l'utilisateur a soumis un commentaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperer les données du formulaire avec escape_string pour éviter les SQL injections
    $email = $db->escape_string($_POST['email']);
    $comment = $db->escape_string($_POST['comment']);

    // Insérer le commentaire dans la base de données
    $sql = "INSERT INTO comments (email, comment) VALUES ('$email', '$comment')";
    if ($db->query($sql)) {
        // Si la requête a réussi, rediriger vers la page d'accueil
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        // Si la requête n'a pas réussi, afficher l'erreur dans la page d'erreur
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

// Fermer la connexion à la base de données
$db->close();
