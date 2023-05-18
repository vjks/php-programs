<?php
$T = readline();

for($i = 0; $i < $T; $i++) {
    list($initial, $deposited, $deducted, $months) = explode(" ", readline());
    $final = ($initial + ($deposited * $months)) - ($deducted * $months);
    print($final . PHP_EOL);
}