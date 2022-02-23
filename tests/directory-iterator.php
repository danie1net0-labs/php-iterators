<?php

$iterator = new DirectoryIterator(__DIR__);

foreach ($iterator as $item) {
    echo "$item\n";
}
