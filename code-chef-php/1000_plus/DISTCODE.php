<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $s = readline();
    
    $len = strlen($s);
    $d = array();
    for($j = 0; $j < $len - 1; $j++) {
        if(array_key_exists(substr($s, $j, 2), $d)) {
            $d[substr($s, $j, 2)] += 1;
        } else {
            $d[substr($s, $j, 2)] = 1;
        }
    }
    
    print(count($d) . PHP_EOL);
}