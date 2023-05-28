<?php
list($movie_length, $sped_up_duration) = explode(" ", readline());

print($movie_length - ($sped_up_duration / 2) . PHP_EOL);