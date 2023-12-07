<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/register' => 'controllers/register.php',
    'login' => 'controllers/login.php',
];

function routeToController($uri, $routes) {

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        echo "Not Available";
    }
}

routeToController($uri, $routes);