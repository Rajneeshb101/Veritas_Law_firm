<?php

global $conn;


$id = $_GET['id'];

$query = "SELECT * FROM attorneys WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$attorney = $stmt->fetch();

if (!$attorney) {
    abort(404);
}

require 'views/backend/attorney/edit.view.php';
