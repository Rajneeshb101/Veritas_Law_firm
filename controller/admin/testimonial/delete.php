<?php

global $conn;

session_start();

$id = $_GET['id'];

$sql = "DELETE FROM testimonials WHERE id = $id";
$sql = $conn->query($sql);

header('Location: /testimonial');
