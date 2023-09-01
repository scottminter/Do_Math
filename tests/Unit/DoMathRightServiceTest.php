<?php

namespace Tests\Unit;

use App\Services\DoMathRightService;
use Exception;
use PHPUnit\Framework\TestCase;

class DoMathRightServiceTest extends TestCase
{
    public function test_do_math_right_addition()
    {
        $result = (new DoMathRightService())->doMath(1.0, 2.0, 'addition');
        $this->assertEquals(3, $result);
        $this->assertIsFloat($result);
    }

    public function test_do_math_right_subtraction()
    {
        $result = (new DoMathRightService())->doMath(3, 2, 'subtraction');
        $this->assertEquals(1, $result);
        $this->assertIsFloat($result);
    }

    public function test_do_math_right_multiplication()
    {
        $result = (new DoMathRightService())->doMath(2, 2, 'multiplication');
        $this->assertEquals(4, $result);
        $this->assertIsFloat($result);
    }

    public function test_do_math_right_division()
    {
        $result = (new DoMathRightService())->doMath(9, 3, 'division');
        $this->assertEquals(3, $result);
        $this->assertIsFloat($result);
    }

    public function test_do_math_right_division_by_zero()
    {
        try {
            (new DoMathRightService())->doMath(24283, 0, 'division');
        } catch (Exception $ex) {
            $this->assertInstanceOf('Exception', $ex);
            $this->assertEquals('Cannot divide by 0.', $ex->getMessage());
        }
    }
}
