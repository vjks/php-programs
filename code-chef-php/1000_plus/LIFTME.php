<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $q) = explode(' ', readline());
    
    $count = 0;
    for($j = 0; $j < $q; $j++) {
        list($fi, $di) = explode(' ', readline());
        if($j == 0) {
            $count += $fi;
            $count += abs($di - $fi);
            $prev_di = $di;
            //print($count . 'first' . PHP_EOL);
        } else {
            $count += abs($prev_di - $fi);
            //print($count . 'other' . PHP_EOL);
            $count += abs($di - $fi);
            //print($count . 'another' . PHP_EOL);
            $prev_di = $di;
        }
    }
    print($count . PHP_EOL);
}