<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($w1, $w2, $x1, $x2, $m) = explode(' ', readline());
    
    $diff = $w2 - $w1;
    
    if($diff < $x1 * $m or $diff > $x2 * $m) {
        print(0 . PHP_EOL);
    } else {
        print(1 . PHP_EOL);
    }
}
