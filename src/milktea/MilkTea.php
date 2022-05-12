<?php

namespace Tolehoai\Mvc\milktea;

class MilkTea
{
    protected int $price;
    protected string $material;


    public function __construct()
    {
        $this->price=20000;
        $this->material = "Milk Tea";
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    /**
     * @param string $material
     */
    public function setMaterial(string $material): void
    {
        $this->material = $material;
    }
    public function showDrinkInfomation(){
        echo "Name: " .$this->getMaterial()."<br> Price: ".$this->getPrice()." VND<br>";
    }



}