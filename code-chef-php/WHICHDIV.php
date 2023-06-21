<?php

$tests = readline();

$i = 0; 
do {
    $rating = readline();
    
    if($rating >= 2000) {
        echo "1\n";
    }elseif($rating >= 1600 and $rating < 2000) {
        echo "2\n";
    }elseif($rating < 1600) {
        echo "3\n";
    }
    $i++;
} while($i < $tests);
