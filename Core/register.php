<?php

require '../function.php';

// Start the session
session_start();

// Include your database connection script
require '../db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['old_name'] = $name;
    $_SESSION['old_email'] = $email;

    //Validate the name
    if (empty($name)) {
        // Set error message
        $_SESSION['error'] = "Name is required";
        header("location: /register");
        exit();
    }

    // Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set error message
        $_SESSION['error'] = "Invalid email";
        header("location: /register");
        exit();
    }

    // Check if the email already exists
    $query = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$email]);
    $result = $stmt->fetch();

    if ($result) {
        // Set error message
        $_SESSION['error'] = "Email already exists";
        header("location: /register");
        exit();
    }

    // Validate the password
    if (strlen($password) < 6) {
        // Set error message
        $_SESSION['error'] = "Password must be at least 6 characters";
        header("location: /register");
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $query = "INSERT INTO users (name, email, password, is_admin) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $email, $hashedPassword,0]);

    // Add User to session
    $_SESSION['user_id'] = $conn->lastInsertId();

    // Redirect to home page
    header("location: /");
}
