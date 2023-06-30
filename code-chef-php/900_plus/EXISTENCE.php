<?php

$t = readline();

$i = 0; 
do { 
    list($x, $y) = explode(' ', readline());
    
    $lhs = pow($x, 2);
    $rhs = 2 * $y;
    
    if($lhs === $rhs) {
        print("YES\n");
    } else {
        print("NO\n");
    }
    $i++;
} while($i < $t);
