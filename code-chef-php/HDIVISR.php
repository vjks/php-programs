<?php

fscanf(STDIN, "%d", $number);
 
$largest = 1;
for($i = 1; $i <= 10; $i++) {
     if($number % $i == 0) {
         $largest = $i;
     }
}

print($largest . PHP_EOL);