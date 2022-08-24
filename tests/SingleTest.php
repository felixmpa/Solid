<?php

namespace Solid\Conceptual\Tests;

use PHPUnit\Framework\TestCase;
use Solid\Conceptual\Single\AreaCalculator;
use Solid\Conceptual\Single\Circle;
use Solid\Conceptual\Single\Square;
use Solid\Conceptual\Single\SumCalculatorOutputter;

final class SingleTest extends TestCase
{        
    public function testInstanciateCircle()
    {
        $circle = new Circle(2);
        
        $this->assertInstanceOf(Circle::class, $circle);
    }

    public function testInstanciateSquare()
    {
        $square = new Square(2);

        $this->assertInstanceOf(Square::class, $square);
    }
    
    public function testAreaCalculator()
    {
        $shapes = [
            new Circle(2),
            new Circle(5),
            new Square(6)
        ];
        
        $areas = new AreaCalculator($shapes);

        $this->assertEquals(127.1061869541, $areas->sum());

    }

    public function testSumCalculatorOutputter() 
    {          
        $shapes = [
            new Square(2),
            new Square(2),
        ];
        
        $areas = new AreaCalculator($shapes);
        $output = new SumCalculatorOutputter($areas);

        $this->assertJsonStringEqualsJsonString(
            '{ "sum": 8 }',
            $output->json()
        );
    }   

}