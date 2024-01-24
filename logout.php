<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Unset and destroy the session
    session_unset();
    session_destroy();

    // Redirect the user to the login page or any other desired location
    header("Location: index.php"); // Replace 'login.php' with the appropriate URL
    exit();
} else {
    // If the user is not logged in, redirect them to the login page
    header("Location: index.php"); // Replace 'login.php' with the appropriate URL
    exit();
}
?>
