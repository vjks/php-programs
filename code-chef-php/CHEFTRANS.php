<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($x, $y, $z) = explode(" ", readline());
    
    if(($x + $y) > $z) {
        echo "TRAIN\n";
    } elseif($x + $y < $z) {
        echo "PLANEBUS\n";
    } else {
        echo "EQUAL\n";
    }
}