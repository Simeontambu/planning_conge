<?php 
require '../vendor/autoload.php';


$router = new App\Router (dirname(__DIR__) . '/src/view');
$router
    ->get('/','templates/home','Accueil')
    ->get('/connecter', 'templates/auth', 'authentification')
    ->run();