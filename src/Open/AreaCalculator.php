<?php

namespace Solid\Conceptual\Open;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];
        foreach($this->shapes as $shape)
        {
            if($shape instanceof ShapeInterface) {
                $area[] = $shape->area();
                continue;
            }

            throw new \Exception("AreaCalculator invalid shape.");
        }
        return array_sum($area);
    }    
}