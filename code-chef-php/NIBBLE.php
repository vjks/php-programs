<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $bits_taken = readline();
    if($bits_taken % 4 == 0)
        print("GOOD\n");
    else {
        print("NOT GOOD\n");
    }
}