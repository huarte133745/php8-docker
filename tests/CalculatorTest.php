<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function shouldAddTwoArguments()
    {
        $calculator = new FizzBuzz();

        $result = $calculator->add(1, 2);

        $this->assertEquals(3, $result);
    }

    /**
     * @test
     */
    public function shouldMultiplyTwoArguments()
    {
        $calculator = new FizzBuzz();

        $result = $calculator->multiply(1, 2);

        $this->assertEquals(2, $result);
    }

    /**
     * @test
     */
    public function shouldDivideTwoArguments()
    {
        $calculator = new FizzBuzz();

        $result = $calculator->divide(4, 2);

        $this->assertEquals(2, $result);
    }

}
