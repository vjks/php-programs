<?php

$character = readline();

if($character == 'A' or $character == 'E' or $character == 'I' or $character == 'O' or $character == 'U') {
    echo "Vowel" . PHP_EOL;
} else {
    echo "Consonant" . PHP_EOL;
}