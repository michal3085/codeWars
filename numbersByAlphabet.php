<?php

function alphabetPosition(string $s) {
    $array = str_split(preg_replace('/[^a-zA-Z]+/', '', $s));

    $result = '';
    foreach ($array as $item) {
        $conv = ord(strtoupper($item)) - ord('A') + 1;
        $result .= ($conv < 0) ? '' : $conv . ' ';
    }

    return rtrim($result, ' ');
}

$tests = [
    'The sunset sets at twelve o\' clock.',
    'The narwhal bacons at midnight.',
];

foreach ($tests as $test) {
    echo alphabetPosition($test) . PHP_EOL;
}