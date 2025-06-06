<?php

function squareDigits(int $num): int {
    $array = array_map('intval', str_split($num));
    $array = array_map(fn ($x) => $x*$x, $array);

    return implode('', $array);
}

$tests = [
    9119,
    24680,
];

foreach ($tests as $test) {
    print_r(squareDigits($test));
    echo PHP_EOL;
}