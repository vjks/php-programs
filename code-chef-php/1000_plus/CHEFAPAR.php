<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    
    $count = 0;
    for($j = 0; $j < $n; $j++) {
        if($a[$j] == '1') {
            $count++;
        }
    }
    
    $pos = array_search('0', $a);
    
    if($n == 1) {
        if($count == 0) {
            print(1100 . PHP_EOL);
        } else {
            print(0 . PHP_EOL);
        }
    }
    elseif($count == $n) {
        print(0 . PHP_EOL);
    } else {
        $diff = $n - $count;
        $total = $diff * 1000 + ($n - $pos) * 100;
        print($total . PHP_EOL);
    }
}