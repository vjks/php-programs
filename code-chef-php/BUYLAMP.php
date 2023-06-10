<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($must_buy, $must_red, $cost_red, $cost_blue) = explode(" ", readline());
    $red_total = $must_red * $cost_red;
    
    if($cost_red < $cost_blue)
        $blue_total = ($must_buy - $must_red) * $cost_red;
    else 
        $blue_total = ($must_buy - $must_red) * $cost_blue;
    
    echo ($red_total + $blue_total) . PHP_EOL;
}
