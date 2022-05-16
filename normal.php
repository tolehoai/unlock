<?php

use Tolehoai\Mvc\milktea\MilkTea;
use Tolehoai\Mvc\milktea\MilkTeaBlackBubble;


require 'vendor/autoload.php';

echo "Normal Way <br>";
$milkTea = new MilkTea();
$milkTea->showDrinkInfomation();

$milkTeaBlackBubble = new MilkTeaBlackBubble();
$milkTeaBlackBubble->showDrinkInfomation();







