<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $x, $k) = explode(' ', readline());
    $a = explode(' ', readline());
    $b = explode(' ', readline());
    
    $count = 0;
    for($j = 0; $j < $n; $j++) {
        if( abs($a[$j] - $b[$j]) <= $k) {
            $count++;
        }
        
        if($count == $x) {
            $break;
        }
    }
    
    if($count >= $x) {
        print('YES' . PHP_EOL);
    } else {
        print('NO ' . PHP_EOL);
    }
}