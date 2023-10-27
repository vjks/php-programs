<?php

$t = readline();
for($i = 0; $i < $t; $i++) {
    list($a, $b, $p, $q) = explode(' ', readline());
    
    $c = $a + $b;
    $r = $p + $q;
    
    if($a == $p and $b == $q) {
        print("0" . PHP_EOL);
    } elseif($c % 2 == 0 and $r % 2 == 0 or $c % 2 != 0 and $r % 2 != 0) {
        print("2" . PHP_EOL);
    } else {
        print("1" . PHP_EOL);
    }
}