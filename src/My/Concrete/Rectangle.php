<?php

namespace App\My\Concrete;

use App\My\Abstract\AbstractFigure;

class Rectangle extends AbstractFigure
{

    private float $side1;
    private float $side2;

    public function __construct(float $side1, float $side2)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        parent::__construct();
    }

    protected function getPerimeter(): float
    {
        return ($this->side1 + $this->side2) * 2;
    }

    protected function getArea(): float
    {
        return $this->side1 * $this->side2;
    }

    protected function getAdditionalInfo(): string
    {
        return "Side1 is $this->side1; Side2 is $this->side2";
    }
}