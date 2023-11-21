<?php

$a = readline();

$possible = false;
if($a % 6 == 0 or $a % 6 == 1 or $a % 6 == 3) {
    $possible = true;
}

if($possible) {
    print('yes');
} else {
    print('no');
}