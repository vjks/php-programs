<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $k) = explode(' ', readline());
    $changes = 0;
    $groups_of_5 = ceil($n / 5);
    $person_position = ceil($k / 5);
    print($groups_of_5 - $person_position . PHP_EOL);
}