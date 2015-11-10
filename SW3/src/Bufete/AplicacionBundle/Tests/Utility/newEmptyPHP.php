<?php

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(30, 12);
 
        // ¡acierta que nuestra calculadora suma dos números correctamente!
        $this->assertEquals(42, $result);
    }
}
