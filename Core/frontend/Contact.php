<?php

global $conn;

require '../../function.php';

// Start the session

session_start();

// Include your database connection script
require '../../db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isAuth()) {
        $query = "SELECT name,email FROM users WHERE id = " . $_SESSION['user_id'];
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
        $name = $result['name'];
        $email = $result['email'];
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
    }

    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if ($_FILES['file']) {
        //File Upload
        $target_dir = "../../storage/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $fileName = uniqid() . "." . $fileType;

        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $fileName);
        }
    } else {
        $fileName = null;
    }

    //Insert the data into the database
    $sql = "INSERT INTO contacts (name, email, phone, message,file) VALUES ('$name', '$email', '$phone', '$message','$fileName')";

    $result = $conn->query($sql);

    header("location: /");
}
