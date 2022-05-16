<?php

namespace Tolehoai\Mvc\decorator;


abstract class  MilkTeaDecorator implements MilkteaInterface
{
    protected  $toping;

    public function __construct(MilkTea $milkTea)
    {
        $this->$toping=$milkTea;
    }


    abstract public function getPrice() :int;
    abstract public function getName() :string;

}
