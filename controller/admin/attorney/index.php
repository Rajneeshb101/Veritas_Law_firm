<?php

global $conn;

require 'db_connection.php';

checkAuth();

$attorneyQuery = "SELECT * FROM attorneys";

$attorneyStmt = $conn->prepare($attorneyQuery);

$attorneyStmt->execute();

$attorneys = $attorneyStmt->fetchAll();

require 'views/backend/attorney/index.view.php';
