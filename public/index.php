<?php

$request_uri = $_SERVER['REQUEST_URI'];
$base_url = str_replace("/index.php", "", $_SERVER['PHP_SELF']);
$route = str_replace($base_url, "", $request_uri);

switch ($route) {
    case '/':
        include('index.html');
        break;
    case '/sponsors':
        include('sponsors.html');
        break;
    default:
        include('index.html');
        break;
}