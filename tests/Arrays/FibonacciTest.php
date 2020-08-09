<?php

namespace Math\Tests\Arrays;

use Math\Arrays\FibonacciRecursion;

class FibonacciTest extends \PHPUnit\Framework\TestCase
{
    public function testFibonacci(): void
    {
        $f = new FibonacciRecursion();
        
        $this->assertEquals($f->getNumber(0), 0);
        $this->assertEquals($f->getNumber(1), 1);
        $this->assertEquals($f->getNumber(2), 1);
        $this->assertEquals($f->getNumber(3), 2);
        $this->assertEquals($f->getNumber(4), 3);
        $this->assertEquals($f->getNumber(5), 5);
        $this->assertEquals($f->getNumber(6), 8);
        $this->assertEquals($f->getNumber(7), 13);
    }
}
