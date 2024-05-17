<?php

global $conn;

session_start();

$id = $_GET['id'];

$sql = "DELETE FROM attorneys WHERE id = $id";
$sql = $conn->query($sql);

header('Location: /attorney');
