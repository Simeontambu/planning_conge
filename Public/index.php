<?php 
require '../vendor/autoload.php';


$router = new App\Router (dirname(__DIR__) . '/src/view');
$router
    ->get('/','auth/login','Accueil')
    ->get('/register', 'auth/auth', 'authentification')
    ->run();