<?php

class A
{
    public function __toString()
    {
        return "GG";
    }
}

assert(
    "GGGG" ===
    (new A) . (new A)
);

assert(
    "HHH" !=
    (new A) . (new A)
);

echo "Asserts passed successfully";
