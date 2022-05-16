<?php

namespace Tolehoai\Mvc\factory;

class ElectricStore extends factoryMethod
{

    public function factoryMethod()
    {
        return new Laptop();
    }
}