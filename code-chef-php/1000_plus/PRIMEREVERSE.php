<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = readline();
    $b = readline();
    
    $count_a = $count_b = 0;
    for($j = 0; $j < $n; $j++) {
        if($a[$j] == 1) {
            $count_a++;
        }
        if($b[$j] == 1) {
            $count_b++;
        }
    }
    if($count_a == $count_b) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}