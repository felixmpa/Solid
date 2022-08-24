<?php 

namespace Solid\Conceptual\InterfaceSegregation;

class Square implements ShapeInterface, ManageShapeInterface
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }

    public function calculate()
    {
        $this->area();
    }
}