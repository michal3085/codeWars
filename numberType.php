<?php

function oddOrEven(array $a): string {
    return array_sum($a) % 2 === 0 ? 'even' : 'odd';
}

$tests = [
    [0],
    [2, 5, 34, 6],
    [0, -1, -5],
    [1],
];

foreach ($tests as $test) {
    echo oddOrEven($test) . PHP_EOL;
}