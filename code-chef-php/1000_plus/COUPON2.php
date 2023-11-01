<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($d, $c) = explode(' ', readline());
    list($a1, $a2, $a3) = explode(' ', readline());
    list($b1, $b2, $b3) = explode(' ', readline());
    
    $total_a = $a1 + $a2 + $a3;
    $total_b = $b1 + $b2 + $b3;
    
    $x = 2 * $d;
    $y = $c;
    
    if($total_a < 150) {
        $y += $d;
    }
    
    if($total_b < 150) {
        $y += $d;
    }
    
    if($x <= $y) {
        print('NO' . PHP_EOL);
    } else {
        print('YES' .  PHP_EOL);
    }
}