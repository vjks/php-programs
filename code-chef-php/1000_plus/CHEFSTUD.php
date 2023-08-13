<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $s = readline();
    
    $len = strlen($s);
    $count = 0;
    for($j = 0; $j < $len - 1; $j++) {
        if($s[$j] == '<' and $s[$j + 1] == '>') {
            $count++;
        }
    }
    print($count. PHP_EOL);
}