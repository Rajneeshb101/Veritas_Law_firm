<?php

require 'db_connection.php';

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function isActiveRoute($route)
{
    return urlIs($route) ? 'active' : '';
}

function checkAuth()
{
    if (!urlIs('/login')) {
        if (!isset($_SESSION['user_id'])) {
            header('location: /login');
        }
        if (!$_SESSION['admin'])
        {
            header('location: /');
        }
    }

}

function getAuthUserName()
{
    global $conn;

    $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    if ($userId) {
        $query = "SELECT name FROM users WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$userId]);
        $result = $stmt->fetch();
        if ($result) {
            return $result['name'];
        }
        else {
            return null;
        }
    } else {
        return null;
    }
}

function asset($path)
{
    return '/assets/' . $path;
}

function isAuth()
{
    return isset($_SESSION['user_id']);
}
