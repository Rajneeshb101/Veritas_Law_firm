<?php

require '../function.php';

// Start the session
session_start();

// Include your database connection script
require '../db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['old_email'] = $email;

    // Query the database
    $query = "SELECT id, password,is_admin FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$email]);
    $result = $stmt->fetch();

    // If user exists
    if ($result) {
        // Verify the password
        if (password_verify($password, $result['password'])) {
            // Save user's ID in session
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['admin'] = $result['is_admin'] === 1;
            if (!$result['is_admin'] == 1) {
                // Redirect to admin dashboard
                header("location: /");
            } else {
                // Redirect to dashboard
                header("location: /dashboard");
            }
        } else {
            // Set error message
            $_SESSION['error'] = "Invalid password";
        }
    } else {
        // Set error message
        $_SESSION['error'] = "Invalid User";
    }
    header("location: /login");
}
