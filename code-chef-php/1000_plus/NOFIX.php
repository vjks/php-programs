<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    
    $x = 0;
    for($j = 1; $j <= $n; $j++) {
        if($j + $x == $a[$j - 1]) {
            $x++;
        }
        //print($j . ' ' . $x . ' ');
        //print($a[$j - 1] + $x. PHP_EOL);
    }
    print($x. PHP_EOL);
}