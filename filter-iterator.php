<?php

require_once 'vendor/autoload.php';

use App\FileExtensionFilter;

$iterator = new FileExtensionFilter(new FilesystemIterator(__DIR__), 'php');

/** @var SplFileInfo $file */
foreach ($iterator as $file) {
    echo $file->getFilename() . "\n";
}
