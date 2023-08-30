<?php

namespace App\Services;

class MathService
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

    protected function addition(float $num1, float $num2): float
    {
        return $num1 + $num2;
    }

    protected function subtraction(float $num1, float $num2): float
    {
        return $num1 - $num2;
    }

    protected function multiplication(float $num1, float $num2): float
    {
        return $num1 * $num2;
    }

    protected function division(float $num1, float $num2): float
    {
        if ($num2 == 0) {
            return 0.0;
        }

        return $num1 / $num2;
    }
}
