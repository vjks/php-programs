<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($alice_number, $bob_number) = explode(" ", readline());
    $sum = $alice_number + $bob_number;
    $isPrime = True;
    for($j = 2; $j < $sum; $j++) {
        if($sum % $j == 0) {
            $isPrime = False;
            break;
        }
    }
    if($isPrime)
        print("Alice\n");
    else
        print("Bob\n");
}