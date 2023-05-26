<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_people, $tiles_available) = explode(" ", readline());
    if($tiles_available % $num_people == 0)
        print("YES\n");
    else
        print("NO\n");
}
