<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($x1, $x2, $y1, $y2, $z1, $z2) = explode(" ", readline());
    
    if($x2 >= $x1 and $y2 >= $y1 and $z2 <= $z1) {
        echo "yes\n";
    } else {
        echo "no\n";
    }
}