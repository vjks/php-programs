<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($m, $x, $y) = explode(' ', readline());
    $h = explode(' ', readline());
    
    $array = array();
    for($k = 0; $k < 100; $k++) {
        array_push($array, 1);
    }
    //var_dump($array);
    $time = $x * $y;
    $total = 0;
    for($j = 0; $j < $m; $j++) {
        $left = max($h[$j] - $time, 1);
        $right = min($h[$j] + $time, 100);
        
        for($k = $left; $k <= $right; $k++) {
            $array[$k - 1] = 0;
        }
    }
    
    for($k = 0; $k < 100; $k++) {
        if($array[$k] == 1) {
            $total++;
        }
    }
    //var_dump($array);
    print($total . PHP_EOL);
}