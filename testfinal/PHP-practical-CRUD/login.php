<?php
session_start(); // Ensure session is started
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $error = "";

    // Check if email exists in the 'crud' table
    $stmt = $pdo->prepare("SELECT * FROM crud WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Store user ID and name in session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['first_name'];

        // Redirect to profile page after login
        header("Location: profile.php");
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}

// Include login form
include 'views/login.view.php';
?>
