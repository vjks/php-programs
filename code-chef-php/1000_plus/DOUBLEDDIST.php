<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    
    sort($a);

    $possible = true;
    for($j = 0; $j < $n - 2; $j++) {
        $diff1 = $a[$j + 1] - $a[$j];
        $diff2 = $a[$j + 2] - $a[$j + 1];
        
        if($diff1 % 2 == 0 or $diff2% 2 == 0) {
            continue;
        } else {
            $possible = false;
            break;
        }
    }
    
    if($possible) {
        print('Yes' . PHP_EOL);
    } else {
        print('No' . PHP_EOL);
    }
}