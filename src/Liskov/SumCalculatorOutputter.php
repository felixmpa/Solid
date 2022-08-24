<?php

namespace Solid\Conceptual\Liskov;

class SumCalculatorOutputter 
{
    public $calculator;

    public function __construct(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function json()
    {
        return json_encode(array(
            'sum' => $this->calculator->sum()
        ));
    }

    public function html()
    {
        return implode('', array(
            '',
                'Sum of the areas of provided shapes: ',
                $this->calculator->sum(),
            '',
        ));
    }
}