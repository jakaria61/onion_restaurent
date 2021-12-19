<?php

$request = $_SERVER['REQUEST_URI'];
$router = str_replace('/php/routing', '', $request);

if ($router == '/' || $router == '/home') {
    include('home.php');
} elseif ($router == '/login') {
    include('login.php');
} elseif ($router == '/food') {
    include('food.php');
} elseif ($router == '/register') {
    include('register.php');
} else {
    include('notfound.php');
}
