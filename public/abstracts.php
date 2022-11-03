<?php

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use App\My\Concrete\Circle;
use App\My\Concrete\Rectangle;
use App\My\Concrete\Triangle;

$figures = [
    (new Circle(2)),
    (new Circle(1)),
    (new Rectangle(2, 2)),
    (new Rectangle(3, 1)),
    (new Triangle(2, 2, 2)),
    (new Triangle(3, 4, 5)),
];

foreach ($figures as $figure) {
    $figure->printInfo();
}