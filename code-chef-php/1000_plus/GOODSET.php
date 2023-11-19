<?php

$t = readline();
for($i = 0; $i < $t; $i++) {
    $n = readline();
 
    $end = ' ';
    for($j = 0; $j < $n; $j++) {
        if($j == $n - 1) {
            $end = PHP_EOL;
        }
        print(500 - ($j + 1) . $end);
    }   
}