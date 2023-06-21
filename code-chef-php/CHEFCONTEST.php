<?php

$tests = readline();

$i = 0;
do {
    list($x, $y, $p, $q) = explode(" ", readline());
    
    $penalty_chef = $x + $p * 10;
    $chefina_penalty = $y + $q * 10;
    
    if($penalty_chef < $chefina_penalty) {
        echo "Chef\n";
    } elseif($chefina_penalty < $penalty_chef) {
        echo "Chefina\n";
    } else {
        echo "Draw\n";
    }
    $i++;
} while($i < $tests);
