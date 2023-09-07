<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    //var_dump($a);
    
    $x = count($a);
    $total = 0;
    for($j = 0; $j < $n - 1; $j++) {
        for($k = $j + 1; $k < $n; $k++) {
            $total += $a[$j] * $a[$k];
        }
        
    }
    print($total . PHP_EOL);
}