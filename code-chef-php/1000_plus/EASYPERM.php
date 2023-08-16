<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    
    $space = ' ';
    for($j = $n ; $j > 0; $j--) {
        if($j == 1) {
            $space = '';
        }
        print($j . $space);
    }
    print(PHP_EOL);
}