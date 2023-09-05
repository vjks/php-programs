<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $s = readline();
    
    $n = strlen($s);
    $char = [];
    for($j = 0; $j < $n; $j++) {
        if($n % 2 == 1 and $j == (ceil($n / 2) - 1)) {
            continue;
        }elseif(array_key_exists($s[$j], $char)) {
            $char[$s[$j]] += 1;
        } else {
            $char[$s[$j]] = 1;
        }
    }
    $lapindrome = true;
    foreach ($char as $key => $value) {
        if($value % 2 == 0) {
            $lapindrome = true;
        } else {
            $lapindrome = false;
            break;
        }
    }
    
    if($lapindrome) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}