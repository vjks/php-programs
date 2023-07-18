<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline(); // Number of races
    $alice_times = explode(' ', readline());
    $bob_times = explode(' ', readline());
    $max_alice = max($alice_times);
    $max_bob = max($bob_times);
    $alice_total = $bob_total = 0;
    $alice_total += array_sum($alice_times);
    $bob_total += array_sum($bob_times);
    
    if($alice_total - $max_alice > $bob_total - $max_bob) {
        print("Bob\n");
    } elseif($bob_total - $max_bob > $alice_total - $max_alice) {
        print("Alice\n");
    } else {
        print("Draw\n");
    }
}
