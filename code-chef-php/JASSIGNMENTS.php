<?php
$t = readline();

for($i = 0; $i < $t; $i++) {
    $start_time = readline();
    if($start_time > 10) {
        print("NO\n");
    } elseif ($start_time + 3 > 10) {
        print("NO\n");
    } else {
        print("YES\n");
    }
}
