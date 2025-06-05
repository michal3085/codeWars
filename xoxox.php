<?php

function xAndO($s) {
    preg_match_all('/x/i', $s, $matchesX);
    $countX = count($matchesX[0]);


    preg_match_all('/o/i', $s, $matchesO);
    $countO = count($matchesO[0]);

    return $countX === $countO;
}

$tests = [
    'xo',
    'XO',
    'xo0',
    'xxxoo',
    'xxOo',
    'zpzpzpp',
];

foreach ($tests as $test) {
    print_r(xAndO($test) . PHP_EOL);
}