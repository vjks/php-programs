<?php

function calculate_total_laddus($array) {
    $total = 0;
    foreach($array as $value) {
        if(str_contains($value, 'CONTEST_WON')) {
            list($code, $rank) = explode(' ', $value);
            if($rank > 20) {
                $bonus = 0;
            } else {
                $bonus = 20 - $rank;
            }
            $points ;
            $total += 300 + $bonus;
        }
        
        if(str_contains($value, 'TOP_CONTRIBUTOR')) {
            $total += 300;
        }
        
        if(str_contains($value, 'BUG_FOUND')) {
            list($code, $severity) = explode(' ', $value);
            $total += (int)$severity;
        }
        
        if(str_contains($value, 'CONTEST_HOSTED')) {
            $total += 50;
        }
    }
    return $total;
}

function indian($total) {
    
    $months = floor($total / 200);
    print($months . PHP_EOL);
}

function non_indian($total) {
    $months = floor($total / 400);
    print($months . PHP_EOL);
}

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($activities, $origin) = explode(' ', readline());
    
    $array = array();
    for($j = 0; $j < $activities; $j++) {
        array_push($array, readline());
    }
    
    $total = calculate_total_laddus($array);
    
    if($origin == 'INDIAN') {
        indian($total);
    } else {
        non_indian($total);
    }
}