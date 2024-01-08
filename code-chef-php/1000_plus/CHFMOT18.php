<?php

$t = readline();
for($i = 0; $i < $t; $i++) {
    list($s, $n) = explode(' ', readline());
    
    $coins = 0;
    if($s % 2 == 0) {
        if($s <= $n) {
            $coins = 1;
        } else {
            $large_coin = floor($s / $n);
            $diff = $s - ($n * $large_coin);
            if($diff == 0) {
              $coins = $large_coin;  
            } elseif($diff % 2 == 0 or $diff == 1) {
                $coins = $large_coin + 1; 
            } else {
                $coins = $large_coin + 2;
            }
        }
    } else {
        if($s <= $n) {
            if($s == 1) {
                $coins = 1;
            } else {
                $coins = 2;
            }
        } else {
            $large_coin = floor($s / $n);
            $diff = $s - ($n * $large_coin);
            if($diff % 2 == 0 or $diff == 1) {
                $coins = $large_coin + 1; 
            } else {
                $coins = $large_coin + 2;
            }
        }
    }
    print($coins . PHP_EOL);
}