<?php


function stray(array $arr): int
{
    return array_key_first(array_filter(array_count_values($arr), fn ($value) => $value === 1 ));
}

$tests = [
    [1, 1, 2],
    [4, 2, 2, 2, 2],
    [4, 4, 4, 5, 4, 4, 4],
];

foreach ($tests as $test) {
    print_r(stray($test));
    echo PHP_EOL;
}