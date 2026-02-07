<?php

function myAutoloader($className)
{
    $classFile = ltrim(str_replace(['Project\\', '\\'], ['', DIRECTORY_SEPARATOR], $className), DIRECTORY_SEPARATOR);
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . $classFile . '.php';
    if (file_exists($filePath)) {
        include_once $filePath;
    }
}

spl_autoload_register('myAutoloader');
