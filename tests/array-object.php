<?php

$items = new ArrayObject([
    'Item 1',
    'Item 2',
    'Item 3',
    'Item 4',
    'Item 6',
]);

print_r($items);
print_r(get_class_methods($items));

echo "\n";

$items->append('Item 5');
$items->asort();

print_r(iterator_to_array($items->getIterator()));

foreach ($items as $key => $value) {
    echo "$key -> $value\n";
}

echo "\ncount: {$items->count()}\n";
echo "offsetExists(1): {$items->offsetExists(1)}\n";
echo "offsetExists(6): {$items->offsetExists(6)}\n";
echo "serialize: {$items->serialize()}\n";

$object = new ArrayObject(
    [
        'nome' => 'Daniel',
        'idade' => 22,
        'nascimento' => '2000-07-17',
    ],
    ArrayObject::ARRAY_AS_PROPS
);

echo "\n$object->nome, $object->idade ($object->nascimento)\n";