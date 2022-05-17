<?php

namespace Tolehoai\Mvc\facade;

class Cocktail
{
    public function doCocktail(){
        $ice = new Ice();
        $wine = new Wine();
        echo $ice->getIce() . "-" . $wine->getWine();
    }
}
