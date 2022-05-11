<?php

use Tolehoai\Mvc\User;
use Tolehoai\Mvc\Google;
use Tolehoai\Mvc\Aws;

require 'vendor/autoload.php';

$tolehoai = new User(new Google);
echo($tolehoai->send("Hello, My name is Hoai."));


