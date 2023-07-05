<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline(); // number of frames initially.
    $frame_values = explode(' ', readline()); // N space separated frame values.
    $count = 0;
    for($j = 0; $j < $n - 1; $j++) {
       if($frame_values[$j] == $frame_values[$j + 1]) {
           $count++;
       } 
    }
    print($n - $count . PHP_EOL);
}
