<?php

$t = readline();

$i = 0; 
do {
    $n = readline();
    $s = readline();
    
    $operations = 0;
    $j = 0;
    do {
        if($s[$j] == '0' and $s[$j + 1] == '0' or $s[$j] == '1' and $s[$j + 1] == '1') {
            $operations++;
        }
        $j++;
    } while($j < $n - 1);
    print($operations . PHP_EOL);
    $i++;
} while($i < $t);