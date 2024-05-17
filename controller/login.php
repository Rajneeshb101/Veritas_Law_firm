<?php

if (isset($_SESSION['user_id'])) {
    header('location: /dashboard');
}

if (!isset($_SERVER['HTTP_REFERER'])) {
    unset($_SESSION['error']);
}

require 'views/login.view.php';
