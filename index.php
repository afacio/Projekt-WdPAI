<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('home', 'ProjectController');
Router::get('start', 'DefaultController');
//Router::get('galeria', 'DefaultController');
//Router::get('odkryj', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');
Router::post('upload', 'ProjectController');

Router::run($path);
