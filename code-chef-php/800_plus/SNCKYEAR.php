<?php

$t = readline();

$i = 0;
do {
    $n = readline();
    
    if($n == 2010 or $n >= 2015 and $n <= 2017 or $n == 2019) {
        print("HOSTED\n");
    } else {
        print("NOT HOSTED\n");
    }
    $i++;
} while($i < $t);