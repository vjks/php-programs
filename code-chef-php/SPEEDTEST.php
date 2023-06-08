<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($alice_dist, $bob_dist, $alice_time, $bob_time) = explode(" ", readline());
    $alice_speed = $alice_dist / $alice_time;
    $bob_speed = $bob_dist / $bob_time;
    
    if($alice_speed > $bob_speed)
        print("ALICE\n");
    elseif($alice_speed < $bob_speed)
        print("BOB\n");
    else
        print("EQUAL\n");
}