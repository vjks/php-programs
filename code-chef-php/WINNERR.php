<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($p_time1, $p_time2, $q_time1, $q_time2) = explode(" ", readline());
    $longest_p = $p_time1 > $p_time2 ? $p_time1 : $p_time2;
    $longest_q = $q_time1 > $q_time2 ? $q_time1 : $q_time2;
    if($longest_p < $longest_q)
        print("P\n");
    elseif($longest_q < $longest_p)
        print("Q\n");
    else
        print("TIE\n");
}
