<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $s = readline();
    
    $count = 0;
    for($j = 0; $j < $n; $j++) {
        if($j < $n - 1 and $s[$j] == $s[$j + 1]) {
            $count++;
            $j++;
        } else {
            $count++;
        }
    }
    print($count . PHP_EOL);
}