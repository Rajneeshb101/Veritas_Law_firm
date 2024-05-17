<?php

global $conn;

//Sliders
$sliderQuery = "SELECT * FROM sliders";
$sliderStmt = $conn->prepare($sliderQuery);
$sliderStmt->execute();
$sliders = $sliderStmt->fetchAll();

//Services
$serviceQuery = "SELECT * FROM services";
$serviceStmt = $conn->prepare($serviceQuery);
$serviceStmt->execute();
$services = $serviceStmt->fetchAll();

//Testimonials
$testimonialQuery = "SELECT * FROM testimonials";
$testimonialStmt = $conn->prepare($testimonialQuery);
$testimonialStmt->execute();
$testimonials = $testimonialStmt->fetchAll();

//Attorneys
$attorneyQuery = "SELECT * FROM attorneys LIMIT 4";
$attorneyStmt = $conn->prepare($attorneyQuery);
$attorneyStmt->execute();
$attorneys = $attorneyStmt->fetchAll();



require 'views/frontend/index.view.php';
