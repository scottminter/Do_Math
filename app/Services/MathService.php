<?php

namespace App\Services;

use App\Interfaces\IMathService;

abstract class MathService implements IMathService
{
    public function __construct()
    {
    }

    public function doMath(float $num1, float $num2, string $mathType): float
    {
        $returnValue = 0.0;

        switch ($mathType) {
            case 'addition':
                $returnValue = $this->addition($num1, $num2);
                break;
            case 'subtraction':
                $returnValue = $this->subtraction($num1, $num2);
                break;
            case 'multiplication':
                $returnValue = $this->multiplication($num1, $num2);
                break;
            case 'division':
                $returnValue = $this->division($num1, $num2);
                break;
        }

        return $returnValue;
    }

    abstract function addition(float $num1, float $num2): float;
    abstract function subtraction(float $num1, float $num2): float;
    abstract function multiplication(float $num1, float $num2): float;
    abstract function division(float $num1, float $num2): float;
}
