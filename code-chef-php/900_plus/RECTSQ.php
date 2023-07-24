<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($l, $b) = explode(' ', readline());
    
    $max = max($l, $b);
    
    $gcd = 0;
    for($j = 1; $j <= $max + 1; $j++) {
        if($l % $j == 0 and $b % $j == 0) {
            $gcd = $j;
        }
    }
    
    print(($l / $gcd) * ($b / $gcd) . PHP_EOL);
}