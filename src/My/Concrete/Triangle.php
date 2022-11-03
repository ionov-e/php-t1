<?php

namespace App\My\Concrete;

use App\My\Abstract\AbstractFigure;

class Triangle extends AbstractFigure
{

    private float $side1;
    private float $side2;
    private float $side3;

    public function __construct(float $side1, float $side2, float $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        parent::__construct();
    }

    protected function getPerimeter(): float
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    protected function getArea(): float
    {
        return
            (
                ($this->side1 + $this->side2 + $this->side3) * ($this->side1 + $this->side2) * ($this->side1 + $this->side3) * ($this->side2 + $this->side3)
            ) ** 0.5;
    }

    protected function getAdditionalInfo(): string
    {
        return "Side1 is $this->side1; Side2 is $this->side2; Side3 is $this->side3";
    }
}