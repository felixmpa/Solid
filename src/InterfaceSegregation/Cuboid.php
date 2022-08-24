<?php

namespace Solid\Conceptual\InterfaceSegregation;

class Cuboid implements ShapeInterface, ThreeDimensionalShapeInterface, ManageShapeInterface
{
    public $length;
    public $width;
    public $height;

    public function __construct($length, $width, $height)
    {
        $this->length = $length;
        $this->width  = $width;
        $this->height = $height;
    }

    public function area()
    {
        return (2 * ($this->length * $this->height * $this->width));
    }
    
    public function volume()
    {
        return ($this->length * $this->width * $this->height);
    }

    public function calculate()
    {
        return $this->area();
    }

}