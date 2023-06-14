<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_items, $min_freshness) = explode(" ", readline());
    $freshness = explode(" ", readline());
    $cost = explode(" ", readline());
    $total = 0;
    for($j = 0; $j < $num_items; $j++) {
        if($freshness[$j] >= $min_freshness) {
            $total += $cost[$j];
        }
    }
    echo($total . PHP_EOL);
}