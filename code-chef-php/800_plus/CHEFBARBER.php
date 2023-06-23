<?php

$t = readline();

$i = 0; 
do {
    list($n, $m) = explode(" ", readline());
    print($n * $m . PHP_EOL);
    $i++;
} while($i < $t);
