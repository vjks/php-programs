<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b) = explode(" ", readline());
    $difference = abs($a - $b);
    
    if(($b - $a) % 2 == 0) {
        echo "YES" . PHP_EOL;
    } else {
        echo "NO" . PHP_EOL;
    }
}