<?php

namespace Tolehoai\Mvc\decorator;

class MilkTea implements MilkteaInterface
{

    public function getPrice() :int
    {
        return 20000;
    }
    public function getName() :string
    {
        return "Milk Tea ";
    }
}