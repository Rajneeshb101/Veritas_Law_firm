<?php

global $conn;

$id = 1;

$query = "SELECT * FROM settings WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$setting = $stmt->fetch();

if (!$setting) {
    abort(404);
}

require 'views/backend/setting/index.view.php';
