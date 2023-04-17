<?php
require '../vendor/autoload.php';
define('cssroot', 'http://localhost/web/gestion_conge/public');
define('jsroot', 'http://localhost/web/gestion_conge/public');
$router = new App\Router(dirname(__DIR__) . '/src/view');
$router
    ->get('/', 'auth/login', 'login')
    ->get('/register', 'auth/auth', 'register')
    ->get('/home', 'admin/home', 'accueil')
    ->get('/home/conge', 'admin/conge', 'conge')
    ->get('/logout', 'auth/logout', 'deconnexion')
    ->get('/home/planning', 'admin/planning', 'planning')
    ->get('/home/agent', 'admin/agent', 'agent')
    ->get('/home/ajoutuser', 'admin/ajoutuser', 'ajoutuser')
    ->run();
