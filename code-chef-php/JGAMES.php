<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($start_num, $total_moves) = explode(" ", readline());
    if(($start_num + $total_moves) % 2 == 0) {
        print("Janmansh\n");
    }
    else {
        print("Jay\n");
    }
}
