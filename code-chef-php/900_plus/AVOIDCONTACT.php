<?php

$t = readline();

$i = 0; 
do {
    list($x, $y) = explode(" ", readline());
    if($x == $y) {
      print($y * 2  - 1 . PHP_EOL);  
    } else {
       print($y * 2  + ($x - $y) . PHP_EOL); 
    }
    
    $i++;
} while($i < $t);