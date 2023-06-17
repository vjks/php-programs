<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b, $m) = explode(" ", readline());
    if ($a > $b) {
        $c = $a;
        $a = $b;
        $b = $c;
    }
    $distance1 = abs($a - $b);
    $distance2 = abs($m - $b) + $a;
    
    if($distance1 < $distance2) 
        echo $distance1 . PHP_EOL;
    elseif($distance2 < $distance1) {
        echo $distance2. PHP_EOL;
    } else {
        echo $distance1 . PHP_EOL;
    }
}
