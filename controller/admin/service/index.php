<?php

require 'db_connection.php';

checkAuth();

$serviceQuery = "SELECT * FROM services";

$serviceStmt = $conn->prepare($serviceQuery);

$serviceStmt->execute();

$services = $serviceStmt->fetchAll();

require 'views/backend/service/index.view.php';
