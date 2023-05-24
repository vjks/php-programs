<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $pulp_weight = readline();
    print($pulp_weight * 1000 /100 . PHP_EOL);
}