<?php

use Tolehoai\Mvc\milktea\MilkTea;
use Tolehoai\Mvc\milktea\MilkTeaBlackBubble;


require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');


$milkTea = new MilkTea();
$milkTea->showDrinkInfomation();

$milkTeaBlackBubble = new MilkTeaBlackBubble();
$milkTeaBlackBubble->showDrinkInfomation();







