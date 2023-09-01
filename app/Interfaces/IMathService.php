<?php

namespace App\Interfaces;

interface IMathService
{
    public function doMath(float $num1, float $num2, string $mathType): float;
}
