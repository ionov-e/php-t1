<?php

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use App\Operations\Calculator;
use App\Operations\Mult;
use App\Operations\Div;
use App\Operations\Plus;
use App\Operations\Minus;

$calculator = new Calculator();

assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() === 4
);

assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() != 5
);

assert(
    $calculator->firstNumber(1)
        ->secondNumber(3)
        ->operation(Plus::class)
        ->result() == 4
);

assert(
    $calculator->firstNumber(1)
        ->secondNumber(3)
        ->operation(Plus::class)
        ->result() != 7
);

assert(
    $calculator->firstNumber(6)
        ->secondNumber(2)
        ->operation(Minus::class)
        ->result() == 4
);

assert(
    $calculator->firstNumber(6)
        ->secondNumber(2)
        ->operation(Div::class)
        ->result() == 3
);

assert(
    $calculator->firstNumber(6)
        ->secondNumber(2)
        ->operation(Div::class)
        ->result() != 4
);