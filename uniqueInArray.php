<?php

function uniqueInArray($a, $b) {
    print_r(array_diff($a, $b));
}

$tests = [
    [[1,2],[1]],
];

foreach ($tests as $test) {
    print_r(uniqueInArray($test[0], $test[1]) . PHP_EOL);
}