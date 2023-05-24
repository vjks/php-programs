<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a_initial, $b_initial) = explode(" ", readline());
    list($c_final, $d_final) = explode(" ", readline());
    if($c_final >= $a_initial and $d_final >= $b_initial) {
        print("POSSIBLE\n"); 
    } else {
        print("IMPOSSIBLE\n");
    }
}