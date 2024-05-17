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
        header("location: /service/create");
        exit();
    } else {
        unset($_SESSION['title_error']);
    }

    // Validate the description
    if (empty($description)) {
        $_SESSION['description_error'] = "Description is required";
        header("location: /service/create");
        exit();
    } else {
        unset($_SESSION['description_error']);
    }

    //validate the image
    if (empty($icon)) {
        $_SESSION['icon_error'] = "Icon is required";
        header("location: /service/create");
        exit();
    } else {
        unset($_SESSION['image_error']);
    }


    // Insert the data into the database
    $sql = "INSERT INTO services (title, description, icon) VALUES ('$title', '$description', '$icon')";
    $result = $conn->query($sql);

    unset($_SESSION['old_title']);
    unset($_SESSION['old_description']);
    unset($_SESSION['old_icon']);
    header("location: /service");


}
