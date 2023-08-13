<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $p = explode(' ', readline());
    
    $min = min($p);
    $max = max($p);
    $index_min = array_search($min, $p);
    $index_max = array_search($max, $p);

    $extra_move = 0;
    if($index_max < $index_min)
        $extra_move++;
    print($index_min + ($n - ($index_max + 1 + $extra_move)) . PHP_EOL);
}
