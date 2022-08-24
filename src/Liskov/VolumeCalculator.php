<?php

namespace Solid\Conceptual\Liskov;

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shapes = [])
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        $area = [];
        foreach($this->shapes as $shape)
        {
            if($shape instanceof ShapeInterface) {
                $area[] = $shape->volume();
                continue;
            }

            throw new \Exception("VolumeCalculator invalid shape.");
        }
        return array_sum($area);
    }
}