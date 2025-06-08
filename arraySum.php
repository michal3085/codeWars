<?php

function sumArray($array) {
  return array_sum($array) - (min($array) + max($array));
}

$tests = [
    [6, 2, 1, 8, 10],
];

foreach ($tests as $test) {
    print_r(sumArray($test));
    echo PHP_EOL;
}