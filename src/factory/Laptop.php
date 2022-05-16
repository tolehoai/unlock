<?php

namespace Tolehoai\Mvc\factory;

class Laptop implements ProductInterface
{
    /**
     * @return string
     */
    public function getProductName(): string
    {
        return "Product: laptop";
    }
}
