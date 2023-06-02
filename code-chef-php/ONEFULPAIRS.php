<?php

list($a, $b) = explode(" ", readline());

$oneful_pair = $a + $b + ($a * $b);

if($oneful_pair == 111)
    print("YES");
else
    print("NO");