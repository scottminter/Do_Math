<?php

namespace App\Interfaces;

interface IDoMath
{
    function addition(float $num1, float $num2): float;
    function subtraction(float $num1, float $num2): float;
    function multiplication(float $num1, float $num2): float;
    function division(float $num1, float $num2): float;
}
