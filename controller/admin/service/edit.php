<?php

global $conn;

$id = $_GET['id'];

$query = "SELECT * FROM services WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$service = $stmt->fetch();

if (!$service) {
    abort(404);
}

require 'views/backend/service/edit.view.php';
