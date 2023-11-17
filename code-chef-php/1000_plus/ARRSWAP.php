<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    $b = explode(' ', readline());
    
    $c = array_merge($a, $b);
    sort($c);
    
    $diff = abs($c[0] - $c[$n - 1]);
    for($j = 0; $j <= $n; $j++) {
        if(abs($c[$j] - $c[$j + $n - 1]) < $diff) {
            $diff = abs($c[$j] - $c[$j + $n - 1]);
            if($diff == 0) {
                break;
            }
        }
    }
    print($diff . PHP_EOL);
}