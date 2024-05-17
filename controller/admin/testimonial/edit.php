<?php

global $conn;

$id = $_GET['id'];

$query = "SELECT * FROM testimonials WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$testimonial = $stmt->fetch();

if (!$testimonial) {
    abort(404);
}

require 'views/backend/testimonial/edit.view.php';
