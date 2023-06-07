<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($skill1, $skill2, $difference) = explode(" ", readline());
    if(abs($skill1 - $skill2) <= $difference)
        print("YES\n");
    else
        print("NO\n");
}