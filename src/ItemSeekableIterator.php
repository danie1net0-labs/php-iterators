<?php

namespace App;

use OutOfBoundsException;
use SeekableIterator;

class ItemSeekableIterator implements SeekableIterator
{
    private int $index = 0;

    public function __construct(private array $items)
    {
    }

    public function seek(int $offset): void
    {
        if (! isset($this->items[$offset])) {
            throw new OutOfBoundsException("Invalid position ($offset).");
        }

        $this->index = $offset;
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