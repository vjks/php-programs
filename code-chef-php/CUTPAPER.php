<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($chart_length, $cutout_length) = explode(" ", readline());
    
    echo(floor($chart_length / $cutout_length) * floor($chart_length / $cutout_length) . PHP_EOL);
}