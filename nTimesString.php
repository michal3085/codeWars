<?php

/*
 * int > 0
 */
function repeatStr(int $n, string $str): string
{
    if ($n <= 0) {
        return '';
    }

    $result = '';
    for ($i = 1; $i <= $n; $i++) {
        $result .= $str;
    }

    return $result;
}

$tests = [
    [3, "I"],
    [2, "Hello"],
    [4, "Dupa"],
    [0, "@"],
];

foreach ($tests as $test) {
    echo repeatStr($test[0], $test[1]) . PHP_EOL;
}