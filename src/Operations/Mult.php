<?php

namespace App\Operations;

use App\Interfaces\OperationInterface;

class Mult implements OperationInterface
{
    public function calculate(int $firstNumber, int $secondNumber): float
    {
        return $firstNumber * $secondNumber;
    }
}