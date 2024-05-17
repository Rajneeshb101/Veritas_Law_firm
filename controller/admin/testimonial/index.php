<?php

require 'db_connection.php';

checkAuth();

$testimonialQuery= "SELECT * FROM testimonials";

$testimonialStmt = $conn->prepare($testimonialQuery);

$testimonialStmt->execute();

$testimonials = $testimonialStmt->fetchAll();


require 'views/backend/testimonial/index.view.php';
