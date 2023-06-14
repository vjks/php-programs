<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($time_to_finish, $laziness_factor, $delay_factor) = explode(" ", readline());
    $lower = $time_to_finish * $laziness_factor;
    $upper = $time_to_finish + $delay_factor;
    echo min($lower, $upper) . PHP_EOL;
}