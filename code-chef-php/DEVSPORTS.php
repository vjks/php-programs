<?php

// your code goes here
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($z, $y, $a, $b, $c) = explode(" ", readline());
    
    $money_left = $z - $y;
    
    $sports_cost = $a + $b + $c;
    
    if($money_left >= $sports_cost) 
        print("YES\n");
    else {
        print("NO\n");
    }
}