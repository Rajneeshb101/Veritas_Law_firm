<?php
global $conn;

require '../../../function.php';

// Start the session
session_start();

// Include your database connection script
require '../../../db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];


    $_SESSION['old_title'] = $title;
    $_SESSION['old_description'] = $description;
    $_SESSION['old_icon'] = $icon;

    // Validate the title
    if (empty($title)) {
        $_SESSION['title_error'] = "Title is required";
        header("location: /service/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['title_error']);
    }

    // Validate the description
    if (empty($description)) {
        $_SESSION['description_error'] = "Description is required";
        header("location: /service/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['description_error']);
    }

    // Validate the icon
    if (empty($icon)) {
        $_SESSION['icon_error'] = "Icon is required";
        header("location: /service/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['icon_error']);
    }


    // Update the data into the database
    $query = "UPDATE services SET title = ?, description = ?, icon = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$title, $description, $icon, $_POST['id']]);

    unset($_SESSION['old_title']);
    unset($_SESSION['old_description']);
    unset($_SESSION['old_icon']);
    header("location: /service");


}
