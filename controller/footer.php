<?php

global $conn;

$query = "SELECT `address`,`phone`,`website`,`email` FROM settings WHERE id = 1";

$stmt = $conn->prepare($query);
$stmt->execute();
$setting = $stmt->fetch();

require 'views/frontend/layouts/footer.view.php';