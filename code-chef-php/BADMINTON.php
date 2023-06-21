<?php

$tests = readline();

$i = 0; 
do {
    $points = readline();
    $even_points = floor($points / 2);
    $even_points++;
    echo $even_points . PHP_EOL;
    $i++;
} while($i < $tests);