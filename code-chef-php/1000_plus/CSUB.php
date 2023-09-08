<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $s = readline();
    
    $count = substr_count($s, '1');
    
    print($count * (($count + 1) / 2) . PHP_EOL);
}