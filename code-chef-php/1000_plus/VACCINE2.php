<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $d) = explode(' ', readline());
    $a = explode(' ', readline());
    
    $risk = 0;
    $not_at_risk = 0;
    
    
    for($j = 0; $j < $n; $j++) {
        if((int)$a[$j] >= 80 or (int)$a[$j] <= 9) {
            $risk += 1;
        }else {
            $not_at_risk += 1;
        }
    }
    
    print(ceil($risk / $d) + ceil($not_at_risk / $d) . PHP_EOL);
}