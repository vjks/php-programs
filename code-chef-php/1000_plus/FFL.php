<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $s) = explode(' ', readline());
    $p = explode(' ', readline());
    $pos = explode(' ', readline());
    
    $defender = array();
    $forward = array();
    
    for($j = 0; $j < $n; $j++) {
        if($pos[$j] == 0) {
            array_push($defender, $p[$j]);
        } else {
            array_push($forward, $p[$j]);
        }
    }
    
    if(count($forward) > 0 and count($defender) > 0) {
        $cheapest_forward = min($forward);
        $cheapest_defender = min($defender);
        
        $sum = $s + $cheapest_forward + $cheapest_defender;
        
        if($sum <= 100) {
            print('yes' . PHP_EOL);
        } else {
            print('no' . PHP_EOL);
        }
    } else { 
        print('no' . PHP_EOL);
    }
}