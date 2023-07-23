<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $a, $b) = explode(' ', readline());
    
    $total_time = 2 * 180 + $n * 2 - $a - $b; 
    print($total_time . PHP_EOL);
}
