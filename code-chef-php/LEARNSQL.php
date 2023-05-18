<?php

list($num_rows, $num_columns, $extra_rows) = explode(" ", readline());

print($num_columns * ($num_rows + $extra_rows));