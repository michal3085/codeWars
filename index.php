<?php

function solution($roman) {
    $number = 0;
    $array = str_split($roman);

    foreach ($array as $item) {
        $number += convertToModern($item);
    }

    return $number;
}

function convertToModern($i)
{
    $roman = [
        'M'  => 1000,
        'D'  => 500,
        'C'  => 100,
        'L'  => 50,
        'X'  => 10,
        'V'  => 5,
        'I'  => 1,
    ];

    return $roman[$i];
}

echo solution('IV') . ' ';
echo solution('MMVXII') . ' ';