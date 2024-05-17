<?php

global $conn;

$query = "SELECT * FROM attorneys";
$stmt = $conn->prepare($query);
$stmt->execute();
$attorneys = $stmt->fetchAll();

require 'views/frontend/attorneys.view.php';