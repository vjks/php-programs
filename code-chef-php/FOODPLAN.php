<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($online_cost, $restaurant_cost) = explode(" ", readline());
    
    $final_online = $online_cost - ($online_cost * .10);
    
    if($final_online < $restaurant_cost) {
        print("ONLINE\n");
    } elseif($final_online > $restaurant_cost) {
        print("DINING\n");
    } else {
        print("EITHER\n");
    }
}