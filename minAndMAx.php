<?php

function highAndLow(string $numbers): string {
    $array = explode(' ', $numbers);
    return max($array) . ' ' . min($array);
}

$tests = [
    "1 2 3 4 5",
    "1 2 -3 4 5",
    "1 9 3 4 -5",
];

foreach ($tests as $test) {
    print_r(highAndLow($test));
    echo PHP_EOL;
}