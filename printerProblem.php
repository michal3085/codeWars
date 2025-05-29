<?php

function printerError($s) {
    $total = strlen($s);
    preg_match_all('/[^a-m]/', $s, $matches);
    $errors = count($matches[0]);

    return $errors . '/' . $total;
}


$tests = [
    'aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz',
    'kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz',
    'kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyzuuuuu',
    'aaaaaaaaaaaaaaaabb',
];

foreach ($tests as $test) {
    echo printerError($test) . PHP_EOL;
}