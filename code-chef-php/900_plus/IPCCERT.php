<?php
    list($n, $m, $k) = explode(" ", readline());
    $j = 0;
    $count = 0;
    do {
        $q = explode(" ", readline());
        $i = $sum = 0;
        do {
            $sum += $q[$i];
            
            $i++;
        } while($i < $k);
        if($sum >= $m and $q[$k] <= 10) {
            $count++; 
            //print($sum . " " . $q[$k] . PHP_EOL);
        }
        $j++;
    } while($j < $n);

print($count . PHP_EOL);