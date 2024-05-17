<?php

global $conn;

session_start();

$id = $_GET['id'];

$sql = "DELETE FROM contacts WHERE id = $id";
$sql = $conn->query($sql);

header('Location: /message');
