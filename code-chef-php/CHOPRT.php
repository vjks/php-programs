<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b) = explode(" ", readline());
    if($a > $b)
        print(">\n");
    elseif($a < $b)
        print("<\n");
    else
        print("=\n");
}