<?php

namespace Tolehoai\Unlock;

use Tolehoai\Unlock\TraitPHP\CalculatorTrait;

class Application
{
    use CalculatorTrait;

    public function __construct()
    {
        echo "Init Class";
    }
    public function tinhTong($a, $b)
    {

        return $this->sum($a, $b);
    }
}
