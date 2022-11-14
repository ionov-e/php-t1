<?php
require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use CbrConverter\Exchange;

try {
    $exchange = new Exchange("USD", "UAH", 100);
    var_dump($exchange->toDecimal());

    $exchange2 = new Exchange("USD", "EUR", 100);
    var_dump($exchange2->toDecimal());
} catch (\Exception $e) {
    echo "There was an Exception: " . $e->getMessage();
}
