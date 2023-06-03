<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($geyser_capacity, $bucket_capacity) = explode(" ", readline());
    print(floor($geyser_capacity / (2 * $bucket_capacity)) . PHP_EOL);
}