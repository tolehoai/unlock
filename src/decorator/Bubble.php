<?php

namespace Tolehoai\Mvc\decorator;

class Bubble extends MilkTeaDecorator
{
    protected $milkTea;

    public function __construct( $milkTea)
    {
        $this->milkTea=$milkTea;
    }


    public function getPrice() :int
    {
        return  8000 + $this->milkTea->getPrice();
    }

    public function getName() :string
    {
        return $this->milkTea->getName() ." Bubble";
    }

}
