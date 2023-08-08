<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $s = readline();
    
    $chars = [];
    for($j = 0; $j < $n; $j++) {
        if(array_key_exists($s[$j], $chars)) {
            $chars[$s[$j]] += 1;
        } else {
            $chars[$s[$j]] = 1;
        }
    }
    
    $possible = "YES\n";
    
    $len = count($chars);
    foreach($chars as $key => $value) {
        if($value % 2 == 1) {
            $possible = "NO\n";
            break;
        }
    }
    print($possible);
}