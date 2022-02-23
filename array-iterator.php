<?php

require_once 'vendor/autoload.php';

use App\ItemArrayIterator;

$items = new ItemArrayIterator([
    'Item 1',
    'Item 2',
    'Item 3',
    'Item 4',
    'Item 5',
]);

print_r($items);
print_r(get_class_methods($items));

echo "\n";

foreach ($items as $key => $value) {
    echo "$key -> $value\n";
}