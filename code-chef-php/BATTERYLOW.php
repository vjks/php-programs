<?php

$T = readline();

for($i = 0; $i < $T; $i++) {
    $battery_level = readline();
    if($battery_level <= 15) {
        print("Yes\n");
    } else {
        print("No\n");
    }
}
