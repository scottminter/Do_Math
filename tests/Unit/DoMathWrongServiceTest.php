<?php

namespace Tests\Unit;

use App\Services\DoMathWrongService;
use PHPUnit\Framework\TestCase;
use Exception;

class DoMathWrongServiceTest extends TestCase
{
    public function test_do_math_wrong_addition()
    {
        $result = (new DoMathWrongService())->doMath(1.0, 2.0, 'addition');
        $this->assertIsFloat($result);
    }

    public function test_do_math_wrong_subtraction()
    {
        $result = (new DoMathWrongService())->doMath(3, 2, 'subtraction');
        $this->assertIsFloat($result);
    }

    public function test_do_math_wrong_multiplication()
    {
        $result = (new DoMathWrongService())->doMath(2, 2, 'multiplication');
        $this->assertIsFloat($result);
    }

    public function test_do_math_wrong_division()
    {
        $result = (new DoMathWrongService())->doMath(9, 3, 'division');
        $this->assertIsFloat($result);
    }

    public function test_do_math_wrong_division_by_zero()
    {
        try {
            (new DoMathWrongService())->doMath(24283, 0, 'division');
        } catch (Exception $ex) {
            $this->assertInstanceOf('Exception', $ex);
            $this->assertEquals('Cannot divide by 0.', $ex->getMessage());
        }
    }
}
