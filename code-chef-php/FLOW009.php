<?php

$tests = readline();

$i = 0;
do {
    list($quantity, $price) = explode(" ", readline());
    $expenses = 0;
    if($quantity > 1000) {
        $discount = ($price * $quantity) * .10;
        $expenses = $price * $quantity - $discount;
    } else {
        $expenses = $price * $quantity;
    }
    print($expenses . PHP_EOL);
    $i++;
}while($i < $tests);