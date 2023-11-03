<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    sort($a);
    
    if(in_array("0", $a)) {
        $count = 0;
        for($j = 0; $j < $n; $j++) {
            if($count >= $a[$j]) {
                $count++;
            }
        }
        print($count . PHP_EOL); 
    }else{
        print(0 . PHP_EOL);
    }
}