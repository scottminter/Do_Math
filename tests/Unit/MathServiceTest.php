<?php

namespace Tests\Unit;

use App\Services\MathService;
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{
    private $mathService;

    public function setUp(): void
    {
        $this->mathService = new class extends MathService
        {
            public function addition(float $num1, float $num2): float
            {
                return 0.0;
            }

            public function subtraction(float $num1, float $num2): float
            {
                return 1.0;
            }

            public function multiplication(float $num1, float $num2): float
            {
                return 2.0;
            }

            public function division(float $num1, float $num2): float
            {
                return 3.0;
            }
        };
    }

    public function test_math_service_do_math_addition()
    {
        $result = $this->mathService->doMath(1.0, 2.0, 'addition');
        $this->assertEquals(0.0, $result);
        $this->assertIsFloat($result);
    }

    public function test_math_service_do_math_subtraction()
    {
        $result = $this->mathService->doMath(3, 2, 'subtraction');
        $this->assertEquals(1.0, $result);
        $this->assertIsFloat($result);
    }

    public function test_math_service_do_math_multiplication()
    {
        $result = $this->mathService->doMath(2, 2, 'multiplication');
        $this->assertEquals(2.0, $result);
        $this->assertIsFloat($result);
    }

    public function test_math_service_do_math_division()
    {
        $result = $this->mathService->doMath(9, 3, 'division');
        $this->assertEquals(3.0, $result);
        $this->assertIsFloat($result);
    }
}
