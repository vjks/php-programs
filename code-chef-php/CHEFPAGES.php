<?php

list($submitted_practice, $participated_contest) = explode(" ", readline());

if(!$submitted_practice)
    print("https://www.codechef.com/practice\n");
elseif($submitted_practice and !$participated_contest)
    print("https://www.codechef.com/contests\n");
elseif($submitted_practice and $participated_contest)
    print("https://discuss.codechef.com\n");