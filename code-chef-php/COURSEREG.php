<?php

$num_tests = readline();

for($i = 0; $i < $num_tests; $i++) {
    list($num_friends, $capacity, $already_enrolled) = explode(" ", readline());
    if($capacity >= $num_friends + $already_enrolled) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}

