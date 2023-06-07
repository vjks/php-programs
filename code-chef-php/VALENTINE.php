<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($has_money, $cost_one_chocolate) = explode(" ", readline());
    print(floor($has_money / $cost_one_chocolate) . PHP_EOL);
}
