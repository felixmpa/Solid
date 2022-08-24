<?php

namespace Solid\Conceptual\Single;

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
            if($shape instanceof Square) {
                $area[] = pow($shape->length, 2);
            }else if( $shape instanceof Circle) {
                $area[] = pi() * pow($shape->radius, 2);
            }
        }
        return array_sum($area);
    }    
}