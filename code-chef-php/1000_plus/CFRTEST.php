<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $days = explode(' ', readline());
    $dict = [];
    for($j = 0; $j < $n; $j++) {
        if(array_key_exists($days[$j], $dict)) {
            $dict[$days[$j]] += 1;
        } else {
            $dict[$days[$j]] = 1;
        }
    }
    
    print(count($dict) . PHP_EOL);
}