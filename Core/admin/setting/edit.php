<?php
global $conn;

require '../../../function.php';

// Start the session
session_start();

// Include your database connection script
require '../../../db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $experience = $_POST['experience'];
    $case_handled = $_POST['case_handled'];
    $clients = $_POST['clients'];
    $awards = $_POST['awards'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];


    // Store the old data into the session
    $_SESSION['old_experience'] = $experience;
    $_SESSION['old_case_handled'] = $case_handled;
    $_SESSION['old_clients'] = $clients;
    $_SESSION['old_awards'] = $awards;
    $_SESSION['old_address'] = $address;
    $_SESSION['old_phone'] = $phone;
    $_SESSION['old_email'] = $email;
    $_SESSION['old_website'] = $website;

    // Validate the experience
    if (empty($experience)) {
        $_SESSION['experience_error'] = "Experience is required";
        header("location: /setting/");
        exit();
    } else {
        unset($_SESSION['experience_error']);
    }

    // Validate the case_handled
    if (empty($case_handled)) {
        $_SESSION['case_handled_error'] = "Case Handled is required";
        header("location: /setting/");
        exit();
    } else {
        unset($_SESSION['case_handled_error']);
    }

    // Validate the clients
    if (empty($clients)) {
        $_SESSION['clients_error'] = "Clients is required";
        header("location: /setting/");
        exit();
    } else {
        unset($_SESSION['clients_error']);
    }

    // Validate the awards
    if (empty($awards)) {
        $_SESSION['awards_error'] = "Awards is required";
        header("location: /setting/");
        exit();
    } else {
        unset($_SESSION['awards_error']);
    }

    // Validate the address
    if (empty($address)) {
        $_SESSION['address_error'] = "Address is required";
        header("location: /setting/");
        exit();
    } else {
        unset($_SESSION['address_error']);
    }

    // Validate the phone
    if (empty($phone)) {
        $_SESSION['phone_error'] = "Phone is required";
        header("location: /setting/");
        exit();
    } else {
        unset($_SESSION['phone_error']);
    }

    // Validate the email
    if (empty($email)) {
        $_SESSION['email_error'] = "Email is required";
        header("location: /setting/");
        exit();
    } else {
        unset($_SESSION['email_error']);
    }

    // Validate the website
    if (empty($website)) {
        $_SESSION['website_error'] = "Website is required";
        header("location: /setting/");
        exit();
    } else {
        unset($_SESSION['website_error']);
    }

    // Update the data into the database
    $query = "UPDATE settings SET experience = ?, case_handled = ?, clients = ?, awards = ?, address = ?, phone = ?, email = ?, website = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$experience, $case_handled, $clients, $awards, $address, $phone, $email, $website, $_POST['id']]);

    unset($_SESSION['old_experience']);
    unset($_SESSION['old_case_handled']);
    unset($_SESSION['old_clients']);
    unset($_SESSION['old_awards']);
    unset($_SESSION['old_address']);
    unset($_SESSION['old_phone']);
    unset($_SESSION['old_email']);
    unset($_SESSION['old_website']);

    header("location: /setting");


}
