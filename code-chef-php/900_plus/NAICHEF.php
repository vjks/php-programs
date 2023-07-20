<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $a, $b) = explode(' ', readline());
    $numbers = explode(' ', readline());
    $count_a = $count_b = 0;
    
    for($j = 0; $j < $n; $j++) {
        if($numbers[$j] == $a) { 
            $count_a++;
        }
        if($numbers[$j] == $b) {
            $count_b++;
        }
    }
    print(($count_a / $n) * ($count_b / $n) . PHP_EOL);
}
