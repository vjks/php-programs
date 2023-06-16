<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $weather = explode(" ", readline());
    $sunny = $rainy = 0;
    foreach($weather as $w) {
        if($w == 0) {
           $rainy += 1; 
        } else {
            $sunny += 1;
        }
    }
    if($sunny > $rainy) {
        echo("YES" . PHP_EOL);
    } else {
        echo("NO" . PHP_EOL);
    }
}