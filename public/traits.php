<?php

trait UpperNameTrait
{
    public function upperName(): string
    {
        return strtoupper($this->name);
    }
}

class User
{
    use UpperNameTrait;

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Customer
{
    use UpperNameTrait;

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

assert(
    (new User('vova'))->upperName() == 'VOVA'
);

assert(
    (new Customer('vova'))->upperName() == 'VOVA'
);

assert(
    (new Customer('vova'))->upperName() != 'ROMA'
);

echo "Asserts passed successfully";