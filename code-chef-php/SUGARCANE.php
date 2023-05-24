<?php

$tests = readline();

$juice_cost = 50;
for($i = 0; $i < $tests; $i++) {
    $num_glasses = readline();
    $income = $num_glasses * 50;
    $profit = $income - $income * .70;
    print($profit . PHP_EOL);
}