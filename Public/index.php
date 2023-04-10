<?php
require '../vendor/autoload.php';
define('cssroot', 'http://localhost/web/gestion_conge/public');
$router = new App\Router(dirname(__DIR__) . '/src/view');
$router
    ->get('/', 'auth/login', 'login')
    ->get('/register', 'auth/auth', 'register')
    ->get('/home', 'admin/home', 'accueil')
    ->run();
