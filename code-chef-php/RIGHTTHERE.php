<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_people, $hall_capacity) = explode(" ", readline());
    
    if($num_people <= $hall_capacity)
        print("YES\n");
    else {
        print("NO\n");
    }
}
