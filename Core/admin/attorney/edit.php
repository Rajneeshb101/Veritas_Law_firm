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
    $title = $_POST['title'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $image = $_FILES['image']['name'];


    $_SESSION['old_name'] = $name;
    $_SESSION['old_title'] = $title;
    $_SESSION['old_facebook'] = $facebook;
    $_SESSION['old_twitter'] = $twitter;
    $_SESSION['old_linkedin'] = $linkedin;
    $_SESSION['old_phone'] = $phone;
    $_SESSION['old_email'] = $email;

    // Validate the title
    if (empty($title)) {
        $_SESSION['title_error'] = "Title is required";
        header("location: /attorney/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['title_error']);
    }

    // Validate the name
    if (empty($name)) {
        $_SESSION['name_error'] = "Name is required";
        header("location: /attorney/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['name_error']);
    }

    // Validate the facebook
    if (empty($facebook)) {
        $_SESSION['facebook_error'] = "Facebook is required";
        header("location: /attorney/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['facebook_error']);
    }

    // Validate the twitter
    if (empty($twitter)) {
        $_SESSION['twitter_error'] = "Twitter is required";
        header("location: /attorney/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['twitter_error']);
    }

    // Validate the linkedin
    if (empty($linkedin)) {
        $_SESSION['linkedin_error'] = "Linkedin is required";
        header("location: /attorney/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['linkedin_error']);
    }

    // Validate the phone
    if (empty($phone)) {
        $_SESSION['phone_error'] = "Phone is required";
        header("location: /attorney/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['phone_error']);
    }

    // Validate the email
    if (empty($email)) {
        $_SESSION['email_error'] = "Email is required";
        header("location: /attorney/edit?id=".$_POST['id']);
        exit();
    } else {
        unset($_SESSION['email_error']);
    }


    if (empty($image)) {
        $query = "SELECT * FROM attorneys WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_POST['id']]);
        $attorney = $stmt->fetch();
       $fileName = $attorney['image'];
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
    $query = "UPDATE attorneys SET name = ?, title = ?, facebook = ?, twitter = ?, linkedin = ?, phone = ?, email = ?, image = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $title, $facebook, $twitter, $linkedin, $phone, $email, $fileName, $_POST['id']]);

    unset($_SESSION['old_name']);
    unset($_SESSION['old_title']);
    unset($_SESSION['old_facebook']);
    unset($_SESSION['old_twitter']);
    unset($_SESSION['old_linkedin']);
    unset($_SESSION['old_phone']);
    unset($_SESSION['old_email']);

    header("location: /attorney");


}
