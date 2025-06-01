<?php

function digitize(int $n): array{
    return array_reverse(array_map('intval', str_split($n)));
}

$tests = [
    35231,
//    0,
//    123,
];

foreach ($tests as $test) {
    print_r(digitize($test)) . PHP_EOL;
}