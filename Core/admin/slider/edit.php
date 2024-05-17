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
        header("location: /slider/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['title_error']);
    }

    // Validate the description
    if (empty($description)) {
        $_SESSION['description_error'] = "Description is required";
        header("location: /slider/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['description_error']);
    }

    if (empty($image)) {
        $query = "SELECT * FROM sliders WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_POST['id']]);
        $slider = $stmt->fetch();
       $fileName = $slider['image'];
    } else {
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
    }

    // Update the data into the database
    $query = "UPDATE sliders SET title = ?, description = ?, image = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$title, $description, $fileName, $_POST['id']]);

    unset($_SESSION['old_title']);
    unset($_SESSION['old_description']);
    header("location: /slider");


}
