<?php

$tests = readline();

$i = 0; 
do {
    $n = readline();
    $count = 0;
    while($n > 0) {
        $count += floor($n / 5);
        $n = floor($n / 5);
    }
    echo $count . PHP_EOL;
    $i++;
} while($i < $tests);
