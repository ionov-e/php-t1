<?php

require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use App\One\Test as Test1;
use App\Two\Test as Test2;
use App\Three\Four\Test  as Test3;

(new Test1())->do();
(new Test2())->do();
(new Test3())->do();