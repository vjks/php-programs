<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $jewels = readline();
    $stones = readline();
    
    $d = array();
    for($j = 0; $j < strlen($stones); $j++) {
        if(str_contains($jewels, $stones[$j])) {
            if(array_key_exists($stones[$j], $d)) {
                $d[$stones[$j]] += 1;
            } else {
                $d[$stones[$j]] = 1;
            }
        } 
    }
    
    $count = 0;
    foreach ($d as $key => $values) {
        $count += $values;
    }
    
    print($count . PHP_EOL);
}