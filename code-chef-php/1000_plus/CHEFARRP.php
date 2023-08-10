<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $array = explode(' ', readline());
    $equal = 0;
    for($j = 0; $j < $n; $j++) {
        $sum = 0; $prod = 1;
        for($k = $j; $k < $n; $k++) {
            $sum += $array[$k];
            $prod *= $array[$k];
            
            if($sum == $prod) {
                $equal++;
            }
        }
    }
    print($equal . PHP_EOL);
}
