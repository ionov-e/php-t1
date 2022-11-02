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
assert(count_even([1, 2, 3, 4, 5, 6, 7, 8]) !== 5);

echo('Puzzle 2 --------------------------    3    --------------------------<br>');

function min_even(array $arr): int
{
    return array_reduce(
        $arr,
        function ($carry, $item) {
            return
                $item % 2 !== 0 || (!is_null($carry) && ($carry < $item))
                    ? $carry
                    : $item;
        }
    );
}

assert(min_even([1, 2, 3, 4]) === 2);
assert(min_even([0, 2, 3, 4, -23]) === 0);
assert(min_even([0, 2, 3, 4, -2]) === -2);
assert(min_even([0, 2, 3, 4, -2]) !== 0);
assert(min_even([0, 2, 3, 4, -2]) !== 1);
assert(min_even([0, 2, -8, 3, 4, -2]) === -8);

echo('Puzzle 2 --------------------------    4    --------------------------<br>');

function min_sum_elements(array $arr): array
{
    return array_slice(
        array_reduce(
            $arr,
            function ($carry, $item) {
                return
                    is_null($carry[0]) || $carry[0] + $carry[1] > $carry[2] + $item
                        ? [$carry[2], $item, $item]
                        : [$carry[0], $carry[1], $item];
            }
        )
        , 0, 2);
}

assert(min_sum_elements([1, 2, 3, 4]) === [1, 2]);
assert(min_sum_elements([1, 7, 3, 4]) === [3, 4]);
assert(min_sum_elements([-1, 3, -5, 0, 7, 9]) === [-5, 0]);

echo('Recursion -----------------------------------------------------<br>');

function sumn(int $n)
{
    if (0 == $n) {
        return 0;
    }

    return $n + sumn($n - 1);
}

assert(sumn(2) == 3);
assert(sumn(3) == 6);
assert(sumn(4) == 10);
assert(sumn(5) == 15);

echo('Closure --------------------------------------------------------<br>');

function create_min_max_validator(int $min, int $max): callable
{
    return function (int $n) use ($min, $max) {
        return ($n <= $max && $n >= $min);
    };
}

$validator = create_min_max_validator(2, 5);
assert($validator(3));
assert(!$validator(6));

echo('Reference Function Argument -----------------------------<br>');

function add_item(array &$arr, mixed $item): void
{
    $arr[] = $item;
}

$array1 = [1];
add_item($array1, 2);
assert($array1 === [1, 2]);
assert($array1 !== [1, 3]);