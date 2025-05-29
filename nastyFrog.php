<?php

function mouthSize($animal) {
    return (strtolower($animal) === 'alligator') ? 'small' : 'wide';
}

$tests = [
    'dog',
    'cat',
    'hamster',
    'alligator',
];

foreach ($tests as $test) {
    echo mouthSize($test) . PHP_EOL;
}