<?php

require __DIR__ . '/vendor/autoload.php';

use Spatie\Watcher\Watch;

$dir = getcwd();

Watch::path($dir)->onFileCreated(function (string $newFilePath) {
    echo "New file at path: '$newFilePath'" . PHP_EOL;
})->start();
