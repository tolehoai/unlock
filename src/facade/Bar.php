<?php

namespace Tolehoai\Mvc\facade;

class Bar
{
    /**
     * @return void
     */
    public function getDrink()
    {
        $cocktail = new Cocktail();
        echo $cocktail->doCocktail();
    }
}
