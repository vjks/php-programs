<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $array_length = readline();
    $array = explode(" ", readline());
    $positive = 0; 
    $negative = 0;
    
    for($j = 0; $j < $array_length; $j++) {
        if($array[$j] == '1') {
            $positive += 1;
        } elseif($array[$j] == '-1') {
            $negative += 1;
        }
    }
    $required = abs($positive - $negative) / 2;
    if($array_length % 2 == 0)
        echo $required . PHP_EOL;
    else
        echo -1 . PHP_EOL;
}