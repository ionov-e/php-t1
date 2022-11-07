<?php

class A
{
    public string $a = "gg";

    public function __construct()
    {
        $this->a = strtoupper($this->a);
    }
}

assert(
    "GG" == (new A)->a
);

echo "Asserts passed successfully";