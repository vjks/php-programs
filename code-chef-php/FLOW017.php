<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $num_array = explode(" ", readline());
    sort($num_array);
    print($num_array[1] . PHP_EOL);
} 