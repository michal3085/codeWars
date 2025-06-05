<?php

function isIsogram($string) {
    return (preg_match('/(\w).*\1/', strtolower($string)) > 0) ? true : false;
}

$tests = [
    'Dermatoglyphics',
    'isogram',
    'aba',
    'moOse',
    'isIsogram',
    '', // an empty string is a valid isogram.
];

foreach ($tests as $test) {
    print_r(isIsogram($test) . PHP_EOL);
}