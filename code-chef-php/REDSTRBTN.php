<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($x, $y, $z) = explode(" ", readline());
    
    $sum = $x + $y + $z;
    if($sum >= 6) {
        echo "YES\n";
    } else {
        echo "NO\n";
    }
}