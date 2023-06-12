<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $item_costs = explode(" " , readline());
    sort($item_costs);
    
    echo($item_costs[1] + $item_costs[2] . PHP_EOL);
}