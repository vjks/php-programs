<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($current_rating, $future_rating) = explode(" ", readline());
    $difference = $future_rating - $current_rating;
    print(ceil($difference / 8) . PHP_EOL);
}
