<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $friends_num = readline();
    print(ceil($friends_num / 4) . PHP_EOL);
}