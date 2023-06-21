<?php

$tests = readline();

$i = 0;
do {
    list($g, $c) = explode(" ", readline());
    
    $h = ($c * $c) / (2 * $g);
    echo $h . PHP_EOL;
    $i++;
} while($i < $tests);
