<?php

require_once 'vendor/autoload.php';

use App\ItemSeekableIterator;

$items = new ItemSeekableIterator([
    'Item 1',
    'Item 2',
    'Item 3',
    'Item 4',
    'Item 5',
]);

print_r($items);
print_r(get_class_methods($items));

echo "\nCurrent: {$items->current()}\n";

$items->seek(3);

echo "Current after seek: {$items->current()}\n";