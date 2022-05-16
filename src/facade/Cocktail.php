<?php

namespace Tolehoai\Mvc\facade;

class Cocktail
{
    public function doCocktail(){
        $ice = new Ice();
        $wine = new Wine();
        $shuffle = new Shuffle();
        echo $ice->getIce() . "-" . $wine->getWine();
    }
}
