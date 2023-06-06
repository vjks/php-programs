<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($final_stair, $climb_stairs) = explode(" ", readline());
    $multiple_steps = floor($final_stair / $climb_stairs);
    $remaining_steps = $final_stair - ($multiple_steps * $climb_stairs);
    print($multiple_steps + $remaining_steps . PHP_EOL);
}
