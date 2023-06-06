<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_candies, $num_pockets, $num_holds) = explode(" ", readline());
    print(ceil($num_candies / ($num_pockets * $num_holds)) . PHP_EOL);
}
