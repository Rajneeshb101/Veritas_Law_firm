<?php

global $conn;

session_start();

$id = $_GET['id'];

$sql = "DELETE FROM sliders WHERE id = $id";
$sql = $conn->query($sql);

header('Location: /slider');
