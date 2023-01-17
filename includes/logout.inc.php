<?php
    session_start();

    // Unset all session variables
    unset($_SESSION['fullName']);

    // Destroy the session
    session_destroy();

    // Redirect to login page
    header("Location: ../login.php");
    exit();
?>
