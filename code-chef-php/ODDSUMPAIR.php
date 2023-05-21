<?php
$T = readline();

for($i = 0; $i < $T; $i++) {
    list($a, $b, $c) = explode(" ", readline());
    if(($a + $b) % 2 != 0 or ($b + $c) % 2 != 0 or ($c + $a) % 2 != 0) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}
