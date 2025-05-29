<?php

function digital_root($number): int
{
    $arrayNums =  splitIntToArray($number);
    $countResult = countArray($arrayNums);

    do {
        $countResult = countArray(splitIntToArray($countResult));
    } while ($countResult >= 10);

    return $countResult;
}

function splitIntToArray($number): array
{
    return array_map('intval', str_split((string)$number));
}

function countArray($array)
{
    $countResult = 0;
    foreach ($array as $number) {
        $countResult += $number;
    }

    return $countResult;
}

echo print_r(digital_root(493193), true) . PHP_EOL;
echo print_r(digital_root(16), true) . PHP_EOL;
echo print_r(digital_root(195), true) . PHP_EOL;
echo print_r(digital_root(992), true) . PHP_EOL;
echo print_r(digital_root(999999999999), true) . PHP_EOL;
echo print_r(digital_root(167346), true) . PHP_EOL;
echo print_r(digital_root(10), true) . PHP_EOL;
echo print_r(digital_root(0), true) . PHP_EOL;