<?php

include "fib.php";

class FibTest extends PHPUnit_Framework_TestCase
{
    public function testFib()
    {
        $fib = new Fib;
        $this->assertEquals(0, $fib->of(0));
        $this->assertEquals(1, $fib->of(1));
        $this->assertEquals(1, $fib->of(2));
        $this->assertEquals(2, $fib->of(3));
        $this->assertEquals(3, $fib->of(4));
        $this->assertEquals(5, $fib->of(5));
        $this->assertEquals(8, $fib->of(6));
    }
}