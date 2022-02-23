<?php

namespace App;

use FilterIterator;
use Iterator;
use SplFileInfo;

class FileExtensionFilter extends FilterIterator
{
    public function __construct(Iterator $iterator, private string $extension)
    {
        parent::__construct($iterator);
    }

    public function accept(): bool
    {
        /** @var SplFileInfo $file */
        $file = $this->getInnerIterator()->current();

        return $this->extension === $file->getExtension();
    }
}