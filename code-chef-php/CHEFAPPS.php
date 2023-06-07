<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($total, $o_1, $o_2, $new) = explode(" ", readline());

    if($total >= $o_1 + $o_2 + $new)
        print(0 . PHP_EOL);
    else {
        if($total >= $o_1 + $new and $total < $o_1 + $o_2 + $new) {
            print(1 . PHP_EOL);
        } elseif ($total >= $o_2 + $new and $total < $o_1 + $o_2 + $new) {
            print(1 . PHP_EOL);
        } elseif ($total >= $new and $total < $o_1 + $o_2 + $new) {
            print(2 . PHP_EOL);
        }
    }
}