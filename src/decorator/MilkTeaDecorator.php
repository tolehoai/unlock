<?php

namespace Tolehoai\Mvc\decorator;


abstract class  MilkTeaDecorator implements MilkteaInterface
{
    protected  $milkTea;

    public function __construct(MilkTea $milkTea)
    {
        $this->milkTea=$milkTea;
    }


    abstract public function getPrice() :int;
    abstract public function getName() :string;

}