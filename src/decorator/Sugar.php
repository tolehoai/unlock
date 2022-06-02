<?php

namespace Tolehoai\Mvc\decorator;

class Sugar extends MilkTeaDecorator
{
    protected  $topping;

    public function __construct( $topping)
    {
        $this->topping=$topping;
    }


    public function getPrice() :int
    {
        return 2000 +$this->topping->getPrice();
    }
    public function getName() :string
    {

        return $this->topping->getName() . " Suger";
    }
}
