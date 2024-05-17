<?php
// Start the session
session_start();

// Unset all the session variables
unset($_SESSION['user_id']);
unset($_SESSION['admin']);

// Finally, destroy the session.
session_destroy();

// Redirect to the login page
header("location: login");
exit;