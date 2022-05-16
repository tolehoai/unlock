<?php

namespace Tolehoai\Mvc\factory;

class factoryMethod implements StoreInterface
{

    /**
     * @return Laptop
     */
    public function getProduct()
    {
        return new Laptop();
    }
}
