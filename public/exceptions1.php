<?php

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use App\Exceptions\MyException;

try {
    mythrow();
    echo 'passed';
} catch (MyException) {
    echo 'exception';
}

// ----------------------- Functions:

/** Если содержимое массива GET пусто - выкидывает исключение
 * @throws MyException
 */
function mythrow(): void
{
    if (empty($_GET)) {
        throw new MyException("MyException");
    }

}

