<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $x) = explode(' ', readline());
    
    $max_rating = 0;
    for($j = 0; $j < $n; $j++) {
        list($si, $ri) = explode(' ', readline());
        if($si <= $x and $ri > $max_rating) {
            $max_rating = $ri;
        }
    }
    print($max_rating . PHP_EOL);
}
