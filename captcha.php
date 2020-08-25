<?php

$digits = str_split("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz?!");

foreach(range(0,100) as $blank){
foreach(range(0,8) as $blank2){
    echo $digits[array_rand($digits)];
}
echo '
';
}

