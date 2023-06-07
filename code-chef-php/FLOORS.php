<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($chef_roomnumber, $chefina_roomnumber) = explode(" ", readline());
    
    $chef_floor = ceil($chef_roomnumber / 10);
    $chefina_floor = ceil($chefina_roomnumber / 10);
    print(abs($chefina_floor - $chef_floor) . PHP_EOL);
}
