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
    $image = $_FILES['image']['name'];


    $_SESSION['old_title'] = $title;
    $_SESSION['old_description'] = $description;

    // Validate the title
    if (empty($title)) {
        $_SESSION['title_error'] = "Title is required";
        header("location: /slider/create");
        exit();
    } else {
        unset($_SESSION['title_error']);
    }

    // Validate the description
    if (empty($description)) {
        $_SESSION['description_error'] = "Description is required";
        header("location: /slider/create");
        exit();
    } else {
        unset($_SESSION['description_error']);
    }

    //validate the image
    if (empty($image)) {
        $_SESSION['image_error'] = "Image is required";
        header("location: /slider/create");
        exit();
    } else {
        unset($_SESSION['image_error']);
    }

    //File Upload
    $target_dir = "../../../storage/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $fileName  = uniqid().".".$imageFileType;

    if (is_uploaded_file($_FILES['image']['tmp_name']))
    {
        move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$fileName);
    }

    // Insert the data into the database
    $sql = "INSERT INTO sliders (title, description, image) VALUES ('$title', '$description', '$fileName')";
    $result = $conn->query($sql);

    unset($_SESSION['old_title']);
    unset($_SESSION['old_description']);
    header("location: /slider");


}
