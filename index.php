<?php

session_start();

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('home', 'DefaultController');
Router::get('start', 'DefaultController');
Router::get('galeria', 'ProjectController');
//Router::get('odkryj', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('logout', 'SecurityController');
Router::post('register', 'SecurityController');
Router::post('addProject', 'ProjectController');
Router::post('search', 'ProjectController');
Router::get('like', 'ProjectController');
Router::get('dislike', 'ProjectController');

Router::run($path);
