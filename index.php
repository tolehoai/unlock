<?php

use Tolehoai\Mvc\User;
use Tolehoai\Mvc\Google;
use Tolehoai\Mvc\Aws;

require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

$tolehoai = new User(new Google);
$tolehoai->send("Hello, My name is Hoai.");


