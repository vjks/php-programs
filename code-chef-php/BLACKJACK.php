<?php

$tests = readline();

for($x = 0; $x < $tests; $x++) {
    list($a, $b) = explode(" ", readline());
    $c = 21 - ($a + $b);
    if($c > 10)
        print(-1 . PHP_EOL);
    else {
        print($c . PHP_EOL);
    }
}
