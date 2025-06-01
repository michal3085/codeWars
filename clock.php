<?php

function past($h, $m, $s) {
    $hours = $h*60*60*1000;
    $mins = $m*60*1000;
    $s = $s*1000;

    return $hours + $mins + $s;
}

$tests = [
    [0,1,1],
    [1,1,1],
    [0,0,0],
    [1,0,1],
    [1,0,0],
];

foreach ($tests as $test) {
    echo past($test[0], $test[1], $test[2]) . PHP_EOL;
}