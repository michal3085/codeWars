<?php

function findEvenIndex($arr){
    $countingSum = 0;
    $records = [];
    for ($i=0; $i<count($arr); $i++) {
        $records[] = $countingSum + $arr[$i];
        unset($arr[$i]);

        echo array_sum($arr) . ',' . ($records[$i]) . PHP_EOL;
    }

    return -1;
}

$tests = [
    [1,2,3,4,3,2,1],
    [1,100,50,-51,1,1],
    [1,2,3,4,5,6],
    [20,10,30,10,10,15,35],
    [20,10,-80,10,10,15,35],
];

foreach ($tests as $test) {
    echo findEvenIndex($test) . PHP_EOL;
}