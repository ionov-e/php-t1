<?php

use App\Exceptions\MyException;

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

/** @throws MyException */
function mythrow(): void
{
    if (empty($_GET)) {
        throw new MyException("MyException");
    }

}

try {
    mythrow();
    echo 'passed';
} catch (MyException) {
    echo 'exception';
}