<?php

$num_tests = readline();

for($i = 0; $i < $num_tests; $i++){
    list($capacity, $filled) = explode(" ", readline());
    print($capacity - $filled . "\n");
}
