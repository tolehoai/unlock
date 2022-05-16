<?php

use Tolehoai\Mvc\adapter\ZaloSendMessage;
use Tolehoai\Mvc\factory\factoryMethod;

require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "Factory Design Pattern <br>";
$laptop = new factoryMethod();
echo $laptop->getProduct();

echo "Factory Design Pattern <br>";
$zalo = new ZaloSendMessage("Hello my name is Hoai");
echo $zalo->sendMessage();

