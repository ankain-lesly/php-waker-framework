<?php

use App\Controllers\MainController;
use Devlee\WakerRouter\Router;

// use Devlee\PHPRouter\Router;

$HomeRoutes = Router::useRoute();

$HomeRoutes->get('/', [MainController::class, "Index"]);
$HomeRoutes->get('/about', [MainController::class, "About"]);
 
// RouteGroup
