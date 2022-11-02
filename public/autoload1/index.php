<?php

spl_autoload_register(function ($class_name) {
    include 'classes' . DIRECTORY_SEPARATOR . $class_name . '.php';
});

(new Test1())->do();
(new Test2())->do();