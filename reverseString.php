<?php

function spinWords(string $str): string {
    $arrayOfStrings = explode(' ', $str);
    foreach ($arrayOfStrings as $key => $string) {
        if (strlen($string) >= 5) {
            $arrayOfStrings[$key] = strrev($string);
        }
    }

    return implode(' ', $arrayOfStrings);
}


$tests = [
    'Hey fellow warriors',
    'This is a test',
    'This is another test',
];

foreach ($tests as $test) {
    print_r(spinWords($test) . PHP_EOL);
}