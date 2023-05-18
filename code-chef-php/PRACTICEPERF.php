<?php

list($p1, $p2, $p3, $p4) = explode(" ", readline());

$count = 0;
if($p1 >= 10) {
    $count += 1;
}
if($p2 >= 10) {
    $count += 1;
}
if($p3 >= 10) {
    $count += 1;
}
if($p4 >= 10) {
    $count += 1;
}
print($count . "\n");