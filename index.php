<?php

use Tolehoai\Mvc\decorator\MilkTea;
use Tolehoai\Mvc\decorator\Bubble;
use Tolehoai\Mvc\decorator\Sugar;



require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

//$milkTea = new Sugar(new Bubble(new MilkTea())) ;
$milkTea = new Sugar(new Bubble(new MilkTea())) ;
echo "Name: ". $milkTea->getName();
echo "<br/>";
echo "Price: ".$milkTea->getPrice() ." VND";
//$milkTea = new MilkTea();
//$milkTea->showDrinkInfomation();
//
//$milkTeaBlackBubble = new MilkTeaBlackBubble();
//$milkTeaBlackBubble->showDrinkInfomation();






