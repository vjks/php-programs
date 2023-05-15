<?php
$num_tests = readline();

for($i = 0; $i < $num_tests; $i++) {
    list($num_members, $favour_voted) = explode(" ", readline());
    if(($num_members - $favour_voted) <= $favour_voted)
        print("YES\n");
    else
        print("NO\n");
}