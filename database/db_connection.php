<?php
// Database configuration
define('DB_HOST', 'localhost'); //? define database host constant
define('DB_USER','root');       //? define database username constant
define('DB_PASSWORD','');       //? define database password constant
define('DB_NAME','daw');        //? define database name constant

// Create database connection
try {
    $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
} catch (mysqli_sql_exception $e) {
    echo "<p>Failed to load this block due to database conntection problem, please contact developers</p>";
    die("Connection failed: " . $e->getMessage() ."");
}
?>
