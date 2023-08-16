<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $array = explode(' ', readline());
    
    $possible = "YES";
    $sum = array_sum($array);
    
    if($sum % 2 == 1) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}