<?php
$T = readline();

for($i = 0; $i < $T; $i++) {
    $item_price = readline();
    print(100 - $item_price . PHP_EOL);
}