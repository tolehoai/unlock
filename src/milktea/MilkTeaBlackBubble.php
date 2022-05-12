<?php

namespace Tolehoai\Mvc\milktea;

class MilkTeaBlackBubble extends MilkTea
{
    protected int $price;
    protected string $material;
    public function __construct()
    {
        parent::__construct();
        $this->price=parent::getPrice()+10000;
        $this->material=parent::getMaterial()." Black Bubble";
    }
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int|string $price
     */
    public function setPrice(int|string $price): void
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
