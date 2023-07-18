<?php

$t = readline();

for($i = 0; $i < $t; $i++) { 
    list($n, $x) = explode(' ', readline());
    $house_strength = explode(' ', readline());
    $length = count($house_strength);
    $count = 0;
    for($j = 0; $j < $length; $j++) {
        if($house_strength[$j] < $x) {
            $count = $j + 1;
        } 
    }
    print($count . PHP_EOL);
}