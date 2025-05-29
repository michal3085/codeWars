<?php

function toJadenCase(string $string)
{
    return implode(' ', array_map(fn ($k) => ucfirst($k), explode(' ', $string)));
}

$tests = [
    "dupa - jan koleo",
    "How can mirrors be real if our eyes aren't real",
];

foreach ($tests as $test) {
    echo toJadenCase($test) . PHP_EOL;
}