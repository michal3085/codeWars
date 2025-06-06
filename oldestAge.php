<?php

function twoOldestAges(array $ages) {
    asort($ages);
    return array_values(array_slice($ages, -2));
}

$tests = [
    [1,5,87,45,8,8],
    [6,5,83,5,3,18],
];

foreach ($tests as $test) {
    print_r(twoOldestAges($test));
    echo PHP_EOL;
}