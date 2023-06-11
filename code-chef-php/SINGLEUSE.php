<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($boss_points, $simple_attack, $special_attack) = explode(" ", readline());
    
    $count = 0;
    

    $boss_points -= $special_attack;
    $count += 1;
    
    if($boss_points >= 0) {
        $num_attacks = ceil($boss_points / $simple_attack);
        $count += $num_attacks;
    }
    echo ($count . PHP_EOL);
}