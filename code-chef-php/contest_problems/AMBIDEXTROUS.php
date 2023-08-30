<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($l, $r, $m) = explode(' ', readline());

    $pages = ceil($m / $l);
    $lines = ($m / $r);

    print(floor($pages + $lines) . PHP_EOL);
}
