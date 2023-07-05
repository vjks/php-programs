<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($p, $m, $v) = explode(' ', readline());
    
    print(($m - ($p - 1)) * $v . PHP_EOL);
}