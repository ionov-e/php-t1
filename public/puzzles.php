<?php

function assert_failed($file, $line, $expr)
{
    print "Assertion failed in $file on line $line: $expr\n";
}

function factorial(int $n): int
{
    return array_reduce(
        range(1, $n),
        function ($carry, $item) {
            return $item === 0 ? 1 : $carry * $item;
        },
        1
    );
}

assert_options(ASSERT_CALLBACK, 'assert_failed');

echo('Puzzle 0 --------------------------    0    --------------------------<br>');

assert(factorial(0) == 1);
assert(factorial(1) == 1);
assert(factorial(4) == 24);


echo('Puzzle 1 --------------------------    1    --------------------------<br>');

function even_to_zero(int $number): int
{
    return (int)implode(
        "",
        array_values(
            array_map(
                fn($number) => $number % 2 === 1 ? $number : 0,
                str_split($number, 1)
            )
        )
    );
}

assert(even_to_zero(12345) === 10305);


echo('Puzzle 1 --------------------------    2    --------------------------<br>');

function is_palindrome(string $word): bool
{
    return iconv(
            'windows-1251',
            'utf-8',
            strrev(
                iconv(
                    'utf-8',
                    'windows-1251',
                    $word
                )
            )
        ) === $word;
}

assert(is_palindrome('шалаш'));
assert(!is_palindrome('такси'));


echo('Puzzle 1 --------------------------    3    --------------------------<br>');

function array_double(array $array): array
{
    return array_map(
        fn($number) => $number * 2,
        $array);
}

assert(array_double([1, 2, 3]) === [2, 4, 6]);

echo('Puzzle 1 --------------------------    4    --------------------------<br>');

function only_odd(array $array): array
{
    return array_values(
        array_filter(
            $array,
            function ($item) {
                return $item % 2 === 1;
            }
        )
    );
}

assert(only_odd([1, 2, 3]) === [1, 3]);

echo('Puzzle 2 --------------------------    1    --------------------------<br>');

function divisible_by_three(int $max, int $min): array
{
    return array_values(
        array_filter(
            range($max, $min, -1),
            function ($item) {
                return $item % 3 === 0;
            }
        )
    );
}

assert(divisible_by_three(12, 0) === [12, 9, 6, 3, 0]);
assert(divisible_by_three(1002, 0) === range(1002, 0, -3));
assert(divisible_by_three(1003, 0) === range(1002, 0, -3));

echo('Puzzle 2 --------------------------    2    --------------------------<br>');

function count_even(array $arr): int
{
    return array_reduce(
        $arr,
        function ($carry, $item) {
            return $item % 2 === 0 ? ++$carry : $carry;
        },
        0
    );
}

assert(count_even([1, 2, 3]) === 1);
assert(count_even([1, 2, 3, 4, 5, 6, 7, 8]) === 4);