<?php

$t = readline();

$i = 0; 
do {
    $n = readline();
    if($n % 2 == 0) {
        print($n / 2 + 1 . PHP_EOL);
    } else {
        print(ceil($n / 2) . PHP_EOL);
    }
    $i++;
} while($i < $t);
