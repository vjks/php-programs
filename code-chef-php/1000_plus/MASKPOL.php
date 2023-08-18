<?php

$T = readline();

for($i = 0; $i < $T; $i++) {
    list($N, $A) = explode(' ', readline());
    print(min($N - $A, $A) . PHP_EOL);
}