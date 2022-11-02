<?php

assert_options(ASSERT_CALLBACK, 'assert_failed');

assertException(
    \Exception::class,
    function () {
        customthrow(2);
    }
);



// ----------------------- Functions:

function assert_failed($file, $line, $expr)
{
    print "Assertion failed in $file on line $line: $expr\n";
}

function assertException(string $class, callable $callable)
{
    try {
        $callable();
        echo "assertException haven't caught any exceptions <br>";
    } catch (\Exception $e) {
        assert($class === get_class($e));
        echo "assertException caught given exception <br>";
    }
}

/** @throws Exception */
function customthrow(int $n): void
{
    if ($n <= 6) {
        throw new \Exception("Exception");
    }

    echo "customthrow didn't throw exceptions <br>";
}
