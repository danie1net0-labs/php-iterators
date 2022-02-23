<?php

namespace App;

use ArrayIterator;
use IteratorAggregate;

class ItemArrayIterator implements IteratorAggregate
{
    private int $index = 0;

    public function __construct(private array $items)
    {
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items);
    }
}