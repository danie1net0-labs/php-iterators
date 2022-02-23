<?php

require_once 'vendor/autoload.php';

use App\ItemIterator;

$items = new ItemIterator([
    'Item 1',
    'Item 2',
    'Item 3',
    'Item 4',
    'Item 5',
]);

print_r($items);
print_r(get_class_methods($items));

echo "\nWhile:\n---------------\n";

while ($items->valid()) {
    echo "{$items->key()} -> {$items->current()}\n";

    $items->next();
}

echo "\nFor:\n---------------\n";

for ($items->rewind(); $items->valid(); $items->next()) {
    echo "{$items->key()} -> {$items->current()}\n";
}

echo "\nForeach:\n---------------\n";

foreach ($items as $key => $value) {
    echo "$key -> $value\n";
}