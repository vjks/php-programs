<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    
    $d = array();
    for($j = 0; $j < $n; $j++) {
        if(array_key_exists($a[$j], $d)) {
            $d[$a[$j]] += 1;
        } else {
            $d[$a[$j]] = 1;
        }
    }
    
    $count = 0;
    foreach($d as $key => $value) {
        if($value > 2) {
            $count += ($value * ($value - 1)) / 2;
        } elseif($value == 2) {
            $count += 1;
        }
    }
    print($count . PHP_EOL);
}