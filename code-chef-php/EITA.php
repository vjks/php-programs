<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($d_days, $x_work, $y_work, $z_work) = explode(" ", readline());
    
    $x_strategy = $x_work * 7;
    $alt_strategy = $y_work * $d_days + $z_work * (7 - $d_days);
    
    if($x_strategy > $alt_strategy)
        echo $x_strategy . PHP_EOL;
    else {
        echo $alt_strategy . PHP_EOL;
    }
}