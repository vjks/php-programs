<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($water, $pulp, $advised_water, $advised_pulp) = explode(" ", readline());
    
    $required_water = $advised_water / $water;
    $required_pulp = $advised_pulp / $pulp;
    
    print($required_water + $required_pulp . PHP_EOL);
}