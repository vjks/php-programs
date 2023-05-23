<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($alice_time, $bob_time, $charlie_time) = explode(" ", readline());
    $alice_time = 400 / $alice_time;
    $bob_time = 400 / $bob_time;
    $charlie_time = 400 / $charlie_time;
    if($alice_time > $bob_time and $alice_time > $charlie_time) {
        print("Alice\n");
    } elseif ($bob_time > $alice_time and $bob_time > $charlie_time) {
        print("Bob\n");
    } elseif ($charlie_time > $alice_time and $charlie_time> $bob_time) {
        print("Charlie\n");
    } else {
        print("ERROR\n");
    }
}
