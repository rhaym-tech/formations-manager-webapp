<?php
// Include database connection file
include '../database/db_connection.php';

// Function to safely redirect
function redirect($url) {
    header("Location: $url#comments");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $email = $db->escape_string($_POST['email']);
    $comment = $db->escape_string($_POST['comment']);

    // Insert comment into database
    $sql = "INSERT INTO comments (email, comment) VALUES ('$email', '$comment')";
    if ($db->query($sql)) {
        // Comment submitted successfully, redirect back to the page
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        // Error occurred, handle it or redirect with error message
        // Example: redirect($_SERVER['HTTP_REFERER'] . '?error=1');
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

// Close database connection
$db->close();
