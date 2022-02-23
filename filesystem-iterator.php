<?php

$iterator = new FilesystemIterator(__DIR__);

print_r($iterator);
print_r(get_class_methods($iterator));

echo "\nDirectory: " . __DIR__ . "\n\n";

foreach ($iterator as $file) {
    echo $file->getFilename() . ' -> ' . ($file->isFile() ? 'file' : 'dir') . "\n";
}