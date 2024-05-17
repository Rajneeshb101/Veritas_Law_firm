<?php

global $conn;

$query = "SELECT `experience`,`case_handled`,`clients`,`awards` FROM settings WHERE id = 1";

$stmt = $conn->prepare($query);
$stmt->execute();
$setting = $stmt->fetch();

$testimonialQuery = "SELECT * FROM testimonials";
$testimonialStmt = $conn->prepare($testimonialQuery);
$testimonialStmt->execute();
$testimonials = $testimonialStmt->fetchAll();


require 'views/frontend/about.view.php';
