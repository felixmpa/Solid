<?php 

namespace Solid\Conceptual\Open;

class Triangle implements ShapeInterface
{
    public $base;
    public $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function area()
    {
        return ((1/2) * $this->base * $this->height);
    }
}