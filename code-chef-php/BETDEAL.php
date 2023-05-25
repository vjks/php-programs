<?php

$tests = readline();
$first_price = 100;
$second_price = 200;
for($i = 0; $i < $tests; $i++) {
    list($discount_first, $discount_second) = explode(" ", readline());
    $first_final = $first_price - ($first_price * ($discount_first / 100));
    $second_final = $second_price - ($second_price * ($discount_second / 100));
    
    if( $first_final < $second_final) 
        print("FIRST\n");
    elseif(ceil($second_final) == ceil($first_final))
        print("BOTH\n");
    else 
        print("SECOND\n");
}
