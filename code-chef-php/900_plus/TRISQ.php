<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $b = readline();
    
    $n = floor($b / 2) - 1;
    if($n < 0) 
        $n = 0;
    
    $total = $n * ($n + 1) / 2;
    print($total . PHP_EOL);
}
