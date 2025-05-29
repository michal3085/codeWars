<?php

function solution($str) {
    return array_map(
        fn($item) => (strlen($item) < 2 && $item !== ' ') ? $item . '_' : $item,
        str_split($str, 2)
    );
}

$tests = [
    'abcdef',
    'abcdefg',
    ' ',
];

foreach ($tests as $test) {
    echo print_r(solution($test)) . PHP_EOL;
}