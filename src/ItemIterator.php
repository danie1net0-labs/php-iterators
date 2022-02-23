<?php

namespace App;

use Iterator;

class ItemIterator implements Iterator
{
    private int $index = 0;

    public function __construct(private array $items)
    {
    }

    public function current(): mixed
    {
        return $this->items[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): int
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return array_key_exists($this->index, $this->items);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }
}