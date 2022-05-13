<?php

use Tolehoai\Mvc\Core\Application;
use Tolehoai\Mvc\Core\Route;

require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

$app = new Application();



$app->route->get('/','home');
$app->route->get('/contact','contact');

$app->route->get('/about',function(){
    return "About";
});

$app->route->get('/404',function(){
    return "Not Found";
});





$app->run();








