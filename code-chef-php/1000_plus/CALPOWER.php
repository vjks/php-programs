<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $name = readline();
    $stringParts = str_split($name);
    sort($stringParts);
    $name = implode($stringParts);

    $total = 0;
    $len = strlen($name);
    
    for($k = 0; $k < $len; $k++) {
        $total += ($k + 1) * (ord($name[$k]) - 96);
    }
    print($total . PHP_EOL);
}