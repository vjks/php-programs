<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    
    $max = max($a);
    for($j = 0; $j < $n; $j++) {
        if($a[$j] == $max) {
            $a[$j] = 0;
        }
    }
    $second_max = max($a);
    print($max + $second_max . PHP_EOL);
}
