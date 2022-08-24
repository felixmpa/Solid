<?php

namespace Solid\Conceptual\Tests;

use PHPUnit\Framework\TestCase;
use Solid\Conceptual\Liskov\AreaCalculator;
use Solid\Conceptual\Liskov\Circle;
use Solid\Conceptual\Liskov\SumCalculatorOutputter;
use Solid\Conceptual\Liskov\VolumeCalculator;

final class LiskovTest extends TestCase
{        
   
    public function testSumCalculatorOutputter() 
    {          
        $shapes = [
            new Circle(10)
        ];
        
        $areas = new AreaCalculator($shapes);
        $volumnes = new VolumeCalculator($shapes);

        $output = new SumCalculatorOutputter($areas);
        $output2= new SumCalculatorOutputter($volumnes);

        $this->assertJsonStringEqualsJsonString(
            '{ "sum": 314.1592653589793 }',
            $output->json()
        );

        $this->assertJsonStringEqualsJsonString(
            '{ "sum": 4188.790204786391 }',
            $output2->json()
        );
    }
}