<?php

namespace App\Operations;

class Calculator
{
    private int $firstNumber;
    private int $secondNumber;
    private string $classname;

    public function firstNumber(int $number): self
    {
        $this->firstNumber = $number;
        return $this;
    }

    public function secondNumber(int $number): self
    {
        $this->secondNumber = $number;
        return $this;
    }

    public function operation(string $classname): self
    {
        $this->classname = $classname;
        return $this;
    }

    public function result(): int
    {
        return (new $this->classname)->calculate($this->firstNumber, $this->secondNumber);
    }
}