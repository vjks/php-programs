<?php

$num_tests = readline();

for($i = 0; $i < $num_tests; $i++) {
    list($will_drink, $jar_capacity, $refill_charge) = explode(" ", readline());
    print(ceil($will_drink / $jar_capacity) * $refill_charge . PHP_EOL);
}