<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $b = explode(' ', readline());
    
    $possible = true;
    $max = (int)$b[0];
    $min = (int)$b[0];
    for($j = 0; $j < $n; $j++) {
        if((int)$b[$j] <= $min) {
            $min = (int)$b[$j];
        } elseif((int)$b[$j] >= $max) {
            $max = (int)$b[$j];
        } elseif((int)$b[$j] == $max or (int)$b[$j] == $min) {
            continue;
        } else {
            $possible = false;
            break;
        }
    }
    
    if($n == 1 or $possible) {
        print('YES' . PHP_EOL);
    } else {
        print('NO' . PHP_EOL);
    }
}