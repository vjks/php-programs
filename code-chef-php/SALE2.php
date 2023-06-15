<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($items, $cost) = explode(" ", readline());
    echo (($items - floor($items / 3)) * $cost ) . PHP_EOL;
}
