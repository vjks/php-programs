<?php

$num_tests = readline();

for($i = 0; $i < $num_tests; $i++) {
    list($a_length, $b_length, $c_length) = explode(" ", readline());
    if($a_length != $b_length and $b_length != $c_length and $c_length != $a_length)
        print("YES\n");
    else
        print("NO\n");
}