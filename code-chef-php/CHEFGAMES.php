<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($ref1, $ref2, $ref3, $ref4) = explode(" ", readline());
    if($ref1 == 0 and $ref2 == 0 and $ref3 == 0 and $ref4 == 0) {
        print("IN\n");
    } else {
        print("OUT\n");  
    }
}