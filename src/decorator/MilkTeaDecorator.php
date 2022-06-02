<?php

namespace Tolehoai\Mvc\decorator;


abstract class  MilkTeaDecorator implements MilkteaInterface
{
    protected  $topping;

    public function __construct($topping)
    {
        $this->topping=$topping;
    }


    abstract public function getPrice() :int;
    abstract public function getName() :string;

}
