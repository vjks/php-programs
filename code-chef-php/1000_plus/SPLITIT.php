<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $s = readline();
    
    if(str_contains(substr($s, 0, $n - 1), $s[$n - 1])) {
        print('YES' . PHP_EOL);
    } else {
        print('NO' . PHP_EOL);
    }
}