<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($chef_coord, $coord_chefina, $max_move) = explode(" ", readline());
    
    $distance = abs($chef_coord - $coord_chefina);
    print(ceil($distance / $max_move) . PHP_EOL);
}