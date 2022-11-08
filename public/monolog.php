<?php
$projectRootPath = dirname(__DIR__, 1);
require_once $projectRootPath . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;

$logger1 = new Logger('logger1');
$path1 = $projectRootPath . DIRECTORY_SEPARATOR . "logs" . DIRECTORY_SEPARATOR . "monolog.log";

$stream1 = new StreamHandler($path1, Level::Warning);
$firephp = new FirePHPHandler();

$logger1->pushHandler($stream1);
$logger1->pushHandler($firephp);

$logger1->warning('Warning-message');
$logger1->error('Error-message');
$logger1->debug('Debug-message'); // Не пройдет минимальную отсечку



$logger2 = new Logger('logger2');
$path2 = $projectRootPath . DIRECTORY_SEPARATOR . "logs" . DIRECTORY_SEPARATOR . "monolog2.log";

$stream2 = new StreamHandler($path2, Level::Debug);

$logger2->pushHandler($stream2);
$logger2->pushHandler($firephp);

$logger2->warning('Warning-message');
$logger2->error('Error-message');
$logger2->debug('Debug-message');

echo "2 files should be created:<br>" . $path1 . "<br>" . $path2;