<?php

function getMiddle($text) {
    $length = (strlen($text) % 2 === 0) ? 2 : 1;
    return substr($text, (strlen($text) - $length) / 2, $length);
}

$tests = [
    'test',
    'testing',
    'middle',
    'A',
];

foreach ($tests as $test) {
    print_r(getMiddle($test));
    echo PHP_EOL;
}