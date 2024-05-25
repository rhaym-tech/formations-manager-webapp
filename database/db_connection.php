<?php
// Configuration de la base de données
define('DB_HOST', 'localhost'); //? définir la constante de l'hôte de la base de données
define('DB_USER', 'root');      //? définir la constante du nom d'utilisateur de la base de données
define('DB_PASSWORD', '');      //? définir la constante du mot de passe de la base de données
define('DB_NAME', 'daw');       //? définir la constante du nom de la base de données

// Créer une connexion à la base de données
try {
    $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
} catch (mysqli_sql_exception $e) {
    echo "<p>Échec du chargement de ce bloc en raison d'un problème de connexion à la base de données, veuillez contacter les développeurs</p>";
    die("Échec de la connexion : " . $e->getMessage() . "");
}
