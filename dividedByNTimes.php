<?php

function halvingSum($n) {
    $div = 2;
    $result = 0;
    do {
        $result += ceil($n / $div);
        $div *= 2;
    } while ($result > 1);
    return $n;
}

$tests = [
    25, // 47
    127, // 247
];

foreach ($tests as $test) {
    echo halvingSum($test) . PHP_EOL;
}