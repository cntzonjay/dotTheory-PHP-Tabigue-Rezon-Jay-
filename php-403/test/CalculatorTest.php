<?php
    use PHPUnit\Framework\TestCase;
    require './src/Calculator.php';

    class CalculatorTest extends TestCase {
        public function testAdd(): void {
            $calc = new Calculator();
            $expected_resutl = 10;

            $this->assertEquals($expected_resutl, $calc->add(5,5));
        }

        public function testSub(): void {
            $calc = new Calculator();
            $expected_resutl = 10;

            $this->assertEquals($expected_resutl, $calc->sub(15,5));
        }

        public function testMul(): void {
            $calc = new Calculator();
            $expected_resutl = 10;

            $this->assertEquals($expected_resutl, $calc->mul(5,2));
        }

        public function testDiv(): void {
            $calc = new Calculator();
            $expected_resutl = 10;

            $this->assertEquals($expected_resutl, $calc->divide(20,2));
        }
    }
?>