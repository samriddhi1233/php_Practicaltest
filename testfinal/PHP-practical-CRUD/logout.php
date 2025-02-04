<?php
require_once 'config.php';
session_start(); // Ensure session is started

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Regenerate session ID for security
session_regenerate_id(true);

// Redirect to home page
header("Location: index.php");
exit();
?>
