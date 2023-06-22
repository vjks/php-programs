<?php

$tests = readline();

$i = 0; 
do {
    $k = readline();
    $steps_forward = 0; 
    $steps_backward = 0;
    if($k % 2 == 0) {
        $steps_forward = ($k / 2) * 3;
        $steps_backward = ($k / 2);
    } else {
        $steps_forward = ceil($k / 2) * 3;
        $steps_backward = floor($k / 2);
    }
    echo $steps_forward - $steps_backward . PHP_EOL;
    $i++;
} While($i < $tests);