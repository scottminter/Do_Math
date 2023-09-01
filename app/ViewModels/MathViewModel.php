<?php

namespace App\ViewModels;

class MathViewModel
{
    public ?float $number1;
    public ?float $number2;
    public ?float $solution;
    public ?string $mathType;
    public ?string $rightOrWrong;

    public function __construct(
        ?float $num1,
        ?float $num2,
        ?float $solution,
        ?string $mathType,
        ?string $rightOrWrong
    ) {
        $this->number1 = $num1;
        $this->number2 = $num2;
        $this->solution = $solution;
        $this->mathType = $mathType;
        $this->rightOrWrong = $rightOrWrong;
    }
}
