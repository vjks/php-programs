<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($shelves, $books_per_shelf, $box_capacity) = explode(" ", readline());
    
    print(ceil($books_per_shelf / $box_capacity) * $shelves . PHP_EOL);
}
