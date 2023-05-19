<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($to_give, $has, $cost) = explode(" ", readline());
    if($to_give > $has) {
        print((($to_give - $has) * $cost) . PHP_EOL);
    } else {
        print("0" . PHP_EOL);
    }
}