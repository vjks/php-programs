<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $values = explode(' ', readline());
    
    $vote_sum = 0; 
    for($j = 3; $j < count($values); $j++) {
        $vote_sum += $values[$j];
    }
    $half = floor($vote_sum / 2);
    //first
    $first = $values[3] + $values[1] + $values[2];
    
    //second
    $second = $values[0] + $values[4] + $values[2];
    
    //third
    $third = $values[0] + $values[1] + $values[5];
    
    if($first > $half or $second > $half or $third > $half) {
        print("YES" . PHP_EOL);
    } else{
        print("NO" . PHP_EOL);
    }
}