<?php
global $conn;

require '../../../function.php';

// Start the session
session_start();

// Include your database connection script
require '../../../db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $review = $_POST['review'];
    $image = $_FILES['image']['name'];


    $_SESSION['old_name'] = $name;
    $_SESSION['old_review'] = $review;

    // Validate the name
    if (empty($name)) {
        $_SESSION['name_error'] = "Name is required";
        header("location: /testimonial/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['name_error']);
    }

    // Validate the review
    if (empty($review)) {
        $_SESSION['review_error'] = "Review is required";
        header("location: /testimonial/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['review_error']);
    }


    if (empty($image)) {
        $query = "SELECT * FROM testimonials WHERE id = ?";
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
    $query = "UPDATE testimonials SET name = ?, review = ?, image = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $review, $fileName, $_POST['id']]);

    unset($_SESSION['old_name']);
    unset($_SESSION['old_review']);
    header("location: /testimonial");


}
