<?php

namespace Solid\Conceptual\Tests;

use PHPUnit\Framework\TestCase;
use Solid\Conceptual\InterfaceSegregation\Cuboid;
use Solid\Conceptual\InterfaceSegregation\Square;
final class InterfaceSegregationTest extends TestCase
{        
   
    public function testSumCalculatorOutputter() 
    {          
        $cuboid = new Cuboid(10, 5, 5);

        $this->assertInstanceOf(Cuboid::class, $cuboid);
    }
}