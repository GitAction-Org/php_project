<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase {
    /**
     * @covers Calculator::add
     */
    public function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    /**
     * @covers Calculator::subtract
     */
    public function testSubtract() {
        $calculator = new Calculator();
        $result = $calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }
}
