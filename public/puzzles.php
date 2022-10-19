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

echo('--------------------------    0    --------------------------<br>');

assert(factorial(0) == 1);
assert(factorial(1) == 1);
assert(factorial(4) == 24);


echo('--------------------------    1    --------------------------<br>');

function even_to_zero(int $number): int
{
    $numberAsString = (string)$number;

    for ($i = 0; $i < strlen($numberAsString); $i++) {
        if ($i % 2 === 1) {
            $numberAsString[$i] = 0;
        }
    }

    return (int)$numberAsString;
}

assert(even_to_zero(12345) === 10305);


echo('--------------------------    2    --------------------------<br>');

function is_palindrome(string $word): bool
{
    $reversed = iconv('utf-8', 'windows-1251', $word);
    $reversed = strrev($reversed);
    $reversed = iconv('windows-1251', 'utf-8', $reversed);

    return $reversed === $word;
}

assert(is_palindrome('шалаш'));
assert(!is_palindrome('такси'));


echo('--------------------------    3    --------------------------<br>');

function array_double(array $array): array
{
    return array_map(fn($number) => $number * 2, $array);
}

assert(array_double([1, 2, 3]) === [2, 4, 6]);

echo('--------------------------    4    --------------------------<br>');

function only_odd(array $array): array
{
    $return = [];
    foreach ($array as $element) {
        if (1 == $element % 2) {
            $return[] = $element;
        }
    }
    return $return;
}

assert(only_odd([1, 2, 3]) === [1, 3]);