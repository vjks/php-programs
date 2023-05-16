<?php

$num_tests = readline();
for($i = 0; $i < $num_tests; $i++) {
    list($set, $tested, $written) = explode(" ", readline());
    $most_active = max($set, $tested, $written);
    if($most_active == $set) {
        print("Setter\n");
    }
    elseif ($most_active == $tested) {
        print("Tester\n"); 
    }
    elseif ($most_active == $written) {
        print("Editorialist\n");
    }
    else {
        print("Error\n");
    }
}
