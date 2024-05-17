<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controller/index.php',
    '/about' => 'controller/about.php',
    '/contact' => 'controller/contact.php',
    '/attorneys' => 'controller/attorneys.php',
    '/login'=> 'controller/login.php',
    '/register'=> 'controller/register.php',
    '/logout'=> 'Core/logout.php',

    //Dashboard
    '/dashboard' => 'controller/admin/dashboard.php',

    //Slider
    '/slider' => 'controller/admin/slider/index.php',
    '/slider/create' => 'controller/admin/slider/create.php',
    '/slider/edit' => 'controller/admin/slider/index.php',
    '/slider/delete' => 'controller/admin/slider/delete.php',

    //Service
    '/service' => 'controller/admin/service/index.php',
    '/service/create' => 'controller/admin/service/create.php',
    '/service/edit' => 'controller/admin/service/index.php',
    '/service/delete' => 'controller/admin/service/delete.php',

    //Testimonial
    '/testimonial' => 'controller/admin/testimonial/index.php',
    '/testimonial/create' => 'controller/admin/testimonial/create.php',
    '/testimonial/edit' => 'controller/admin/testimonial/index.php',
    '/testimonial/delete' => 'controller/admin/testimonial/delete.php',

    //Contact
    '/message' => 'controller/admin/contact/index.php',
    '/message/delete' => 'controller/admin/contact/delete.php',

    //Setting
    '/setting' => 'controller/admin/setting/index.php',

    //Attorneys
    '/attorney' => 'controller/admin/attorney/index.php',
    '/attorney/create' => 'controller/admin/attorney/create.php',
    '/attorney/edit' => 'controller/admin/attorney/edit.php',
    '/attorney/delete' => 'controller/admin/attorney/delete.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.view.php";

    die();
}

routeToController($uri, $routes);
