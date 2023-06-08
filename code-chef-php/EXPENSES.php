<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_expenses, $x) = explode(" ", readline());
    $earns = pow(2, $x - $num_expenses); //Halving the earning after each expense.
    
    print($earns . PHP_EOL);
}
