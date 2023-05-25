<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a_equity, $b_equity) = explode(" ", readline());
    $a_valuation = $a_equity * 10;
    $b_valuation = $b_equity * 5;
    if($a_valuation > $b_valuation)
        print("First\n");
    elseif ($b_valuation > $a_valuation)
        print("Second\n");
    else
        print("ANY\n");
}