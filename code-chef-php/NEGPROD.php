<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b, $c) = explode(" ", readline());
    if($a * $b < 0)
        print("YES\n");
    elseif($b * $c < 0)
        print("YES\n");
    elseif($c * $a < 0)
        print("YES\n");
    else
        print("NO\n");
}