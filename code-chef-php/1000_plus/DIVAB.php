<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a, $b, $n) = explode(' ', readline());
    
    if($a == $b or $a % $b == 0) {
        print(-1 . PHP_EOL);
    }else{
        if($n % $a == 0 and $n % $b != 0) {
            print($n . PHP_EOL);
        } else{
            $m = (floor($n / $a) + 1) * $a;
            if($m % $b == 0) {
                print($m + $a . PHP_EOL);
            } else {
                print($m . PHP_EOL);    
            }
        }
    }
}