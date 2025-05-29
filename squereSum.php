<?php

function squareSum(array $numbers) : int|array {
    $array =  array_map(
        fn($item) => $item ** 2,
        $numbers
    );

    return array_sum($array);
}

$tests = [
    [1, 2],
    [0, 3, 4, 5],
    [],
    [-1, -2],
    [-1, 0, 1],
];

foreach ($tests as $test) {
    echo squareSum($test) . PHP_EOL;
}