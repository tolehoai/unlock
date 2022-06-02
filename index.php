<?php

use Tolehoai\Mvc\decorator\MilkTea;
use Tolehoai\Mvc\decorator\Bubble;
use Tolehoai\Mvc\decorator\Sugar;



require 'vendor/autoload.php';


$milkTea = new Sugar(new Bubble(new MilkTea())) ;
echo "Name: ". $milkTea->getName();
echo "<br/>";
echo "Price: ".$milkTea->getPrice() ." VND";








