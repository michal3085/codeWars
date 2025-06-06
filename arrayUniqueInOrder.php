<?php

function uniqueInOrder($iterable) {
    return match (get_debug_type($iterable)) {
        'string' => array_unique(str_split($iterable, 1)),
        'array'  => array_unique($iterable),
    };
}

$tests = [
    'AAAABBBCCDAABBB',
    'ABBCcAD',
    [1,2,2,3,3],
    [1,2,2,3,3,1,2],
];

foreach ($tests as $test) {
    print_r(uniqueInOrder($test));
    echo PHP_EOL;
}