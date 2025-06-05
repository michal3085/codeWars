<?php

function uniqueInArray($a)
{
    $result = 1;
    foreach ($a as $value) $result = $value*$result;
    return $result; // array_product($a) <-- robi to co foreach
}

$tests = [
    [1, 2, 3, 4],
    [4, 1, 1, 1, 4],
    [2, 2, 2, 2, 2, 2],
];

foreach ($tests as $test) {
    print_r(uniqueInArray($test) . PHP_EOL);
}