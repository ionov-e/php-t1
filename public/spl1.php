<?php
$path = dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR;

$fileList = [];

foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename) {
    if ($filename->isDir()) continue;
    $fileList[] = str_replace("\\", DIRECTORY_SEPARATOR, $filename->getPathname());
}

foreach ($fileList as $file) {
    echo "$file<br>";
}