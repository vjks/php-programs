<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    
    $count_0 = 0;
    $count_1 = 0;
    foreach($a as $char) {
        if($char === '0') {
            $count_0++;
        } else {
            $count_1++;
        }
    }
    print(min($count_1, $count_0) . PHP_EOL);
}