<?php

// Definition des routes
$routes = [
    'home' => 'UserController',
    'login' => 'UserController',
    // 'order_coaching' => 'CoachingController',
    // 'list_coaching' => 'CoachingController'
];

// Initialisation home
$action = 'home';

// Detection d'un changement dans l'url
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// Si cette "url" existe on execute le controlleur associe
if (array_key_exists($action, $routes))
    include('controllers/' . $routes[$action] . ".php");

// On appel la vue associe
include('views/' . $action . '.php');