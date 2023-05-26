<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_people, $min_age) = explode(" ", readline());
    $age_array = explode(" ", readline());
    $eligible_count = 0;
    foreach ($age_array as $age) {
        if($age >= $min_age)
            $eligible_count = $eligible_count + 1;
    }
    print($eligible_count . PHP_EOL);
}
