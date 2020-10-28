<?php
require 'vendor/autoload.php';

use App\config\Router;

session_start();

$router = new Router();
$router->loadRoutes();

