<?php
require 'vendor/autoload.php';
require 'config/config.php';
//require 'app/controllers/HomePageController.php';

$f3 = \Base::instance();
$f3->set('DEBUG', 3);

$f3->route('GET /', 'App\Controllers\HomePageController->display');
$f3->route('GET /clients', 'App\Controllers\ClientController->getClients');

$f3->run();
