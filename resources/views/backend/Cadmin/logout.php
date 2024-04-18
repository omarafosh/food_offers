<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Redirect to a login page or any other desired page
header("Location: login.php");
?>