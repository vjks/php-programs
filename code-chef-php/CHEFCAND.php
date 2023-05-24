<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_children, $candies_present) = explode(" ", readline());
    if($num_children - $candies_present < 0) {
        print(0 . PHP_EOL);
    } else {
        $extra_candies = ceil(($num_children - $candies_present) / 4);
        print($extra_candies . PHP_EOL);
    }
}