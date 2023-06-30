<?php

$t = readline();

$i = 0; 
do { 
    list($n, $x, $k, $p) = explode(' ', readline());
    $mana = $p;
    
    if($k > 0) {
        $mana += min($x, $k) * 10;
        $bells_left = $k - $x;
        if($bells_left > 0)
            $mana += $bells_left * 5;
    }
    if($k == $n) {
      $mana += 20;  
    }
    print("$mana\n");
    $i++;
} while($i < $t);