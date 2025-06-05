<?php

function sumFromNumber(int $n): int
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) $sum += $i;

    return $sum;
}

$tests = [
    1,
    2,
    3,
    4,
    5,
];

foreach ($tests as $test) {
    echo sumFromNumber($test) . PHP_EOL;
}