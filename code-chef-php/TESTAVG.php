<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a_marks, $b_marks, $c_marks) = explode(" ", readline());
    if(($a_marks + $b_marks) / 2 < 35) {
        print("FAIL\n");
    }elseif (($b_marks + $c_marks) / 2 < 35) {
        print("FAIL\n"); 
    }elseif (($c_marks + $a_marks) / 2 < 35) {
        print("FAIL\n"); 
    }else {
        print("PASS\n"); 
    }
}
