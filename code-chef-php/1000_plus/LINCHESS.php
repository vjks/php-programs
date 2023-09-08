<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $k) = explode(' ', readline());
    $p = explode(' ', readline());
    
    sort($p);
    //var_dump($p);
    $fewest = 0;
    $element = "-1";
    $count = 0;
    for($j = 0; $j < $n; $j++) {
        if($k < $p[$j]) {
            //print($k . ' ' . $p[$j]);
            break;
        }
        if($k % $p[$j] == 0) {
            //print($k . ' ' . $p[$j] . "here\n");
            if ($count == 0) {
                $current = $k / $p[$j];
                $fewest = $current;
                $element = $p[$j];
                $count++;
            } else {
                $current = $k / $p[$j];
                if($current < $fewest) {
                    $fewest = $current;
                    $element = $p[$j];
                }
            }
        }
    }
    print($element . PHP_EOL);
}