<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($x, $h) = explode(' ', readline());
    
    $turns = 0;
    
    $j = 0;
    while($h > 0) {
        if($j < 5) {
            $h -= $x/2;
            $turns++;
            $j++;
        } else {
            $h -= $x;
            $turns++;
        }
    }
    print($turns . PHP_EOL);
}