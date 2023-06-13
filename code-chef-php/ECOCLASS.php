<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $array_len = readline();
    $supply_array = explode(" ", readline());
    $demand_array = explode(" ", readline());
    $count = 0;
    for($j = 0; $j < $array_len; $j++) {
        if($supply_array[$j] == $demand_array[$j]) {
            $count += 1;
        }
    }
    echo $count . PHP_EOL;
}