<?php

global $conn;

session_start();

$id = $_GET['id'];

$sql = "DELETE FROM services WHERE id = $id";
$sql = $conn->query($sql);

header('Location: /service');
