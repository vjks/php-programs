<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b) = explode(" ", readline());
    
    if($a > 0 and $b > 0) {
        echo "Solution" . PHP_EOL;
    } elseif($b == 0) {
        echo "Solid" . PHP_EOL;
    } elseif($a == 0) {
        echo "Liquid" . PHP_EOL;
    }
}