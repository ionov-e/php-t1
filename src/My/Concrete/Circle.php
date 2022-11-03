<?php

namespace App\My\Concrete;

use App\My\Abstract\AbstractFigure;

class Circle extends AbstractFigure
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
        parent::__construct();
    }

    protected function getPerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }

    protected function getArea(): float
    {
        return pi() * $this->radius ** 2;
    }

    protected function getAdditionalInfo(): string
    {
        return "Radius is $this->radius";
    }
}