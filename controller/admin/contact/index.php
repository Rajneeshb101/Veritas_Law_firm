<?php

require 'db_connection.php';


checkAuth();

$contactQuery = "SELECT * FROM contacts";

$contactStmt = $conn->prepare($contactQuery);

$contactStmt->execute();

$contacts = $contactStmt->fetchAll();

require 'views/backend/contact/index.view.php';
