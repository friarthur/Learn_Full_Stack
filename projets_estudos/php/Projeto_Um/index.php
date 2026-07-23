<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'routes/web.php';


$url = $_GET['url'] ?? '';

if ($url == '') {
    $url = $_SERVER['REQUEST_URI'] ?? '/';
}


$url = trim($url, '/');


$url = explode('?', $url)[0];


$url = explode('/', $url);


$rota = strtolower(implode('/', $url));


if (array_key_exists($rota, $routes)) {

    require __DIR__ . '/' . $routes[$rota];
    exit;


http_response_code(404);
}