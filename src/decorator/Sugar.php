<?php

namespace Tolehoai\Mvc\decorator;

class Sugar extends MilkTeaDecorator
{
    protected  $toping;

    public function __construct( $milkTea)
    {
        $this->$toping=$milkTea;
    }


    public function getPrice() :int
    {
        return 2000 +$this->$toping->getPrice();
    }
    public function getName() :string
    {

        return $this->$toping->getName() . " Suger";
    }
}