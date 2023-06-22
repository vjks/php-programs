<?php

$t = readline();

$i = 0; 
do {
    list($n, $x, $y) = explode(" ", readline());
    
    if(($n + 1) * $y >= $x)
        print('YES' . PHP_EOL);
    else {
        print('NO' . PHP_EOL);
    }
    $i++;
} while($i < $t);
