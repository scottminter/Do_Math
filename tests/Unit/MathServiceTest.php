<?php

namespace Tests\Unit;

use App\Services\MathService;
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{
    /**
     * Test doMath addition
     */
    public function test_math_service_do_math_addition()
    {
        $result = (new MathService())->doMath(1.0, 2.0, 'addition');
        $this->assertEquals(3, $result);
        $this->assertIsFloat($result);
    }

    /**
     * Test doMath subtraction
     */
    public function test_math_service_do_math_subtraction()
    {
        $result = (new MathService())->doMath(3, 2, 'subtraction');
        $this->assertEquals(1, $result);
        $this->assertIsFloat($result);
    }

    /**
     * Test domath multiplication
     */
    public function test_math_service_do_math_multiplication()
    {
        $result = (new MathService())->doMath(2, 2, 'multiplication');
        $this->assertEquals(4, $result);
        $this->assertIsFloat($result);
    }

    /**
     * Test doMath division
     */
    public function test_math_service_do_math_division()
    {
        $result = (new MathService())->doMath(9, 3, 'division');
        $this->assertEquals(3, $result);
        $this->assertIsFloat($result);
    }

    /**
     * Test doMath division by 0
     */
    public function test_math_service_do_math_division_by_zero()
    {
        $result = (new MathService())->doMath(24283, 0, 'division');
        $this->assertEquals(0, $result);
        $this->assertIsFloat($result);
    }
}
