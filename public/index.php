<?php

/**
 * Loading app files
 */
require  __DIR__ . "/../config/bootstrap.php";
require __DIR__ . "/../config/routes.php";

$router->config('layoutTwo', '404');

/**
 * Router Setup goes here
 */



// code here



/**
 * Start The Application
 */
$app->run();
