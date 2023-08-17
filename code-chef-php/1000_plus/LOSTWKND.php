<?php

$t = readline(); 

for($i = 0; $i < $t; $i++) {
    list($a1, $a2, $a3, $a4, $a5, $p) = explode(' ', readline());
    
    $available_total_time = 24 * 5;
    $required_time = $p * ($a1 + $a2 + $a3 + $a4 + $a5);
    
    if($required_time <= $available_total_time) {
        print("No\n");
    } else {
        print("Yes\n");
    }
}