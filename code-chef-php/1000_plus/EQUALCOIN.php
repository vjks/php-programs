<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($x, $y) = explode(' ', readline());
    
    $total = $x + $y * 2;
    
    if($total % 2 == 0 and  $y % 2 == 0 and $y > 0 or $total % 2 == 0 and $x % 2 == 0 and $x > 1) {
        print('YES' . PHP_EOL);
    } else {
        print('NO' . PHP_EOL);
    }
}
