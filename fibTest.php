<?php

include "fib.php";

class FibTest extends PHPUnit_Framework_TestCase
{
    public function testFib()
    {
        $fib = new Fib;
        $this->assertEquals(0, $fib->of(0));
    }
}