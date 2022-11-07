<?php

namespace App\Interfaces;

interface OperationInterface
{
    public function calculate(int $firstNumber, int $secondNumber): float;
}