<?php

$tests = readline();

$i = 0; 
do {
    list($a, $b) = explode(" ", readline());
    if(($a + $b) % 2 == 0) {
        echo "Bob\n";
    } else {
        echo "Alice\n";
    }
    $i++;
} while($i < $tests);
