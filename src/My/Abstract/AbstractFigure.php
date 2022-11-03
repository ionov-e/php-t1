<?php

namespace App\My\Abstract;

abstract class AbstractFigure
{

    private float $area;
    private float $perimeter;

    public function __construct()
    {
        $this->area = $this->getArea();
        $this->perimeter = $this->getPerimeter();
    }

    abstract protected function getPerimeter(): float;

    abstract protected function getArea(): float;

    abstract protected function getAdditionalInfo(): string;

    private function getClassNameWithoutNamespace(): string
    {
        $classname = get_class($this);
        if ($pos = strrpos($classname, '\\')) return substr($classname, $pos + 1);
        return $pos;
    }

    public function printInfo(): void
    {
        echo "Type is " .
            $this->getClassNameWithoutNamespace() .
            "<br>" .
            $this->getAdditionalInfo() .
            "<br>Area is $this->area<br>Perimeter is $this->perimeter<br><br><br>";
    }
}