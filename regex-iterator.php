<?php

$filesystemIterator = new FilesystemIterator(__DIR__);
$iterator = new RegexIterator($filesystemIterator, '/^.+\.php$/');

print_r($iterator);
print_r(get_class_methods($iterator));
print_r(get_class_methods($iterator->getInnerIterator()->current()));

/** @var SplFileInfo $file */
foreach ($iterator as $file) {
    echo $file->getFileName() . "\n";
}
