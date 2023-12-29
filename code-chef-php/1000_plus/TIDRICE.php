<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    
    $d = array();
    for($j = 0; $j < $n; $j++) {
        list($name, $sign) = explode(' ', readline());
        if(array_key_exists($name, $d)) {
            $d[$name] = $sign;
        } else {
            $d[$name] = $sign;
        }
    }
    
    $score = 0;
    foreach ($d as $key => $value) {
        if($value === '+') {
            $score += 1;
        } else {
            $score += -1;
        }
    }
    
    print($score . PHP_EOL);
}