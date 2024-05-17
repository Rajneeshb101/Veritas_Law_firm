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


    // Store the values in the session
    $_SESSION['old_name'] = $name;
    $_SESSION['old_review'] = $review;


    // Validate the title
    if (empty($name)) {
        $_SESSION['name_error'] = "Name is required";
        header("location: /testimonial/create");
        exit();
    } else {
        unset($_SESSION['name_error']);
    }

    // Validate the description
    if (empty($review)) {
        $_SESSION['review_error'] = "Review is required";
        header("location: /testimonial/create");
        exit();
    } else {
        unset($_SESSION['review_error']);
    }

    //validate the image
    if (empty($image)) {
        $_SESSION['image_error'] = "Image is required";
        header("location: /testimonial/create");
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
    $sql = "INSERT INTO testimonials (name, review, image) VALUES ('$name', '$review', '$fileName')";
    $result = $conn->query($sql);

    // Unset the session values
    unset($_SESSION['old_name']);
    unset($_SESSION['old_review']);
    header("location: /testimonial");


}
