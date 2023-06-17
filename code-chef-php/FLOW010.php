<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $char = strtoupper(readline());
    
    if($char == 'B') {
        echo 'BattleShip' . PHP_EOL;
    } elseif($char == 'C') {
        echo 'Cruiser' . PHP_EOL;
    } elseif($char == 'D') {
        echo 'Destroyer' . PHP_EOL;
    } elseif($char == 'F') {
        echo 'Frigate' . PHP_EOL;
    }
}
