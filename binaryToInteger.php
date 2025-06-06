<?php

function binaryArrayToNumber(array $arr): int {
    return bindec(implode('', $arr));
}

$tests = [
    [0, 0, 0, 1],
    [0, 0, 1, 0],
    [0, 1, 0, 1],
    [1, 0, 1, 0, 1, 0, 1],
];

foreach ($tests as $test) {
    print_r(binaryArrayToNumber($test));
    echo PHP_EOL;
}