<?php

/** Для вывода результата */
function prettyDump(mixed $data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

echo('--------------------------    1    --------------------------');

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

prettyDump(even_to_zero(12345));


echo('--------------------------    2    --------------------------');

function is_palindrome(string $word): bool
{
    $reversed = iconv('utf-8', 'windows-1251', $word);
    $reversed = strrev($reversed);
    $reversed = iconv('windows-1251', 'utf-8', $reversed);

    return $reversed === $word;
}

prettyDump(is_palindrome('шалаш'));
prettyDump(is_palindrome('такси'));


echo('--------------------------    3    --------------------------');

function array_double(array $array): array
{
    return array_map(fn($number) => $number * 2, $array);
}

prettyDump(array_double([1, 2, 3]));
prettyDump(array_double([2, 4, 6]));

echo('--------------------------    4    --------------------------');

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

prettyDump(only_odd([1, 2, 3]));
prettyDump(only_odd([1, 2, 3, 4, 5, 6, 7, 8]));