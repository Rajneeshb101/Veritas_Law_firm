<?php

require 'db_connection.php';

checkAuth();

$sliderQuery = "SELECT * FROM sliders";

$sliderStmt = $conn->prepare($sliderQuery);

$sliderStmt->execute();

$sliders = $sliderStmt->fetchAll();

require 'views/backend/slider/index.view.php';
