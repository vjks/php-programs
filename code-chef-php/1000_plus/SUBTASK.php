<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $m, $k) = explode(' ', readline());
    $a = explode(' ', readline());
    
    $m_criteria = true;
    $count = 0;
    for($j = 0; $j < $n; $j++) {
        if($a[$j] == 0 and $j < $m) {
            $m_criteria = false;
            $break;
        } elseif($a[$j] != 0) {
            $count++;
        }
    }
    
    if($m_criteria == false) {
        print(0 . PHP_EOL);
    } elseif($m_criteria and $count < $n) {
        print($k . PHP_EOL);
    } else {
        print(100 . PHP_EOL);
    }
}
