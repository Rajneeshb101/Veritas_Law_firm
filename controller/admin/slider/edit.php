<?php

global $conn;

$id = $_GET['id'];

$query = "SELECT * FROM sliders WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$slider = $stmt->fetch();

if (!$slider) {
    abort(404);
}

require 'views/backend/slider/edit.view.php';
