<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $num_items = readline();
    
    print(ceil($num_items / 10) . PHP_EOL);
}
