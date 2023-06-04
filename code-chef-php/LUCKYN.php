<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $potentially_lucky = readline();
    while($potentially_lucky != 0) {
        if($potentially_lucky % 10 == 7) {
            print("YES\n");
            break;
        } else {
            $potentially_lucky = floor($potentially_lucky / 10);
            //print($potentially_lucky . PHP_EOL);
            if($potentially_lucky == 0)
                print("NO\n");
        }
    }
}