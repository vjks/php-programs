<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $k) = explode(' ', readline());
    $heights = explode(' ', readline());
    $num = 0;
    for($j = 0; $j < $n; $j++) {
        if($heights[$j] > $k) {
            $num++;
        }
    }
    print($num . PHP_EOL);
}
