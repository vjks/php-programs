<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $elements = explode(' ', readline());
    
    $negatives = 0;
    for($j = 0; $j < $n; $j++) {
        if($elements[$j] < 0) {
            $negatives++;
        }
        if($elements[$j] == 0) {
            $negatives = 0;
            break;
        }
    }
    if($negatives % 2 == 0) {
        print(0 . PHP_EOL);
    } else {
        print(1 . PHP_EOL);
    }
}
