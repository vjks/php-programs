<?php
$num_tests = readline();

for($i = 0; $i < $num_tests; $i++) {
    list($rebatable_amount, $required_amount) = explode(" ", readline());
    if($required_amount <= $rebatable_amount) {
        print($required_amount . "\n");
    } elseif($required_amount > $rebatable_amount) {
        print($rebatable_amount . "\n");
    } else {
        print("ERROR\n");
    }
}


