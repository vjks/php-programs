<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) { 
    list($problems_submitted, $approved_problems) = explode(" ", readline());
    if($approved_problems / $problems_submitted >= .50) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}