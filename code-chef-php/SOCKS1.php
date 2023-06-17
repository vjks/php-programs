<?php
list($a, $b, $c) = explode(" ", readline());

if($a == $b or $b == $c or $c == $a) {
    echo "yes\n";
} else {
    echo "no\n";
}