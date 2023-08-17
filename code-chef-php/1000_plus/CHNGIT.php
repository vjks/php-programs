<?php
$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $seq = explode(' ', readline());
    
    $dict = [];
    
    for($j = 0; $j < $n; $j++) {
        if(array_key_exists($seq[$j], $dict)) {
            $dict[$seq[$j]]++;
        } else {
            $dict[$seq[$j]] = 1;
        }
    }

    print($n - max($dict) . PHP_EOL);
}