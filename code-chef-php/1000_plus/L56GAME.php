<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $array = explode(' ', readline());
    $odd_count = $even_count = 0;
    for($j = 0; $j < $n; $j++) {
        if($array[$j] % 2 == 1) {
            $odd_count++;
        } else {
            $even_count++;
        }
    }
    
    if($n == 1) {
      print(1 . PHP_EOL);  
    } elseif($odd_count == 0) {
        print(1 . PHP_EOL);
    } elseif ($odd_count % 2 == 1) {
        print(2 . PHP_EOL);
    } elseif ($odd_count % 2 == 0 and $even_count > 0) {
        print(1 . PHP_EOL);
    } elseif ($odd_count % 2 == 0 and $even_count == 0) {
        print(1 . PHP_EOL);
    } else {
        print("ERROR\n");
    }
}
