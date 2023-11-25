<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    
    $dict = array();
    
    for($j = 0; $j < $n; $j++) {
        if(array_key_exists($a[$j], $dict)) {
            $dict[$a[$j]] += 1;
        } else {
            $dict[$a[$j]] = 1;
        }
    }
    
    $smallest = 0;
    $freqs = array();
    foreach($dict as $key => $value) {
        if(array_key_exists($value, $freqs)) {
            $freqs[$value] += 1;
        } else { 
            $freqs[$value] = 1;
        }
    }
    
    $max_freq = max($freqs);
    
    $mode_array = array();
    foreach($freqs as $key => $value) {
        if($value == $max_freq) {
            array_push($mode_array, $key);
        }
    }
    print(min($mode_array) . PHP_EOL);
}