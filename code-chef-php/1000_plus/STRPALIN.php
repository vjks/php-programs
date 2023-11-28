<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $a = readline();
    $b = readline();
    
    $len = strlen($a);
    $possible = false;
    for($j = 0; $j < $len; $j++) {
        if(str_contains($b, $a[$j])) {
            $possible = true;
            break;
        }
    }
    
    if($possible) {
        print('Yes' . PHP_EOL);
    } else {
        print('No' . PHP_EOL);
    }
}