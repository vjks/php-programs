<?php
$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    
    for($j = 0; $j < $n; $j++) {
        for($k = 0; $k < $n; $k++) {
            print(1 . ' ');
        }
        print(PHP_EOL);
    }
}