<?php

function assert_failed($file, $line, $expr)
{
    print "Assertion failed in $file on line $line: $expr\n";
}

function factorial(int $n): int
{
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial = $factorial * $i;
    }
    return $factorial;
}

assert_options(ASSERT_CALLBACK, 'assert_failed');

assert(factorial(0) == 1);
assert(factorial(1) == 1);
assert(factorial(4) == 24);