<?php

$tests = readline();

$i = 0;
do {
    list($x1, $x2, $y1, $y2) = explode(" ", readline());
    $diesel_cost = $y1 / $x1;
    $petrol_cost = $y2 / $x2;
    
    if($diesel_cost < $petrol_cost)
        echo -1 . PHP_EOL;
    elseif($petrol_cost < $diesel_cost)
        echo 1 . PHP_EOL;
    else
        echo 0 . PHP_EOL;
    $i++;
} while($i < $tests);
