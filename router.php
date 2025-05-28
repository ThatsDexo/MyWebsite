<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


$routes = [
    "/MyWebsite/" => "controllers/index.php",
    "/MyWebsite/about" => "controllers/about.php",
    "/MyWebsite/notes" => "controllers/notes.php",
    "/MyWebsite/contact" => "controllers/contact.php"
];

function abort($code = 404)
{
    http_response_code($code);
    require "views/$code.php";
}

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);