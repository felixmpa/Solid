<?php 

namespace Solid\Conceptual\Liskov;

class Circle implements ShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function area()
    {
        return pi() * pow($this->radius, 2);
    }

    public function volume()
    {
        return ((4/3) * pi() * pow($this->radius, 3));
    }
}