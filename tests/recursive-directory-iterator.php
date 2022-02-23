<?php

$directoryIterator = new RecursiveDirectoryIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
$iterator = new RecursiveIteratorIterator($directoryIterator);

print_r(get_class_methods($iterator->getInnerIterator()->current()));

foreach ($iterator as $item) {
    echo "$item\n";
}
