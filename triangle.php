<?php

function rowSumOddNumbers(int $n) {
    $triangle = buildTriangle($n);

    $result = 0;
    foreach ($triangle as $matrix) {
        $result += array_sum($matrix);
    }
    return $result;
}

function buildTriangle(int $n): array
{
    $result = [];
    $rowWidth = 0;
    $currentOdd  = 1;  // set 0 for not even numbers
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 0; $j <= $rowWidth; $j++) {
            $result[$i][$j] = $currentOdd;
            $currentOdd += 2;
        }
        $rowWidth++;
    }

    return $result;
}

// FUNKCJA TESTUJĄCA
function doTest(int $input, int $expected): void {
    $result = rowSumOddNumbers($input);

    print_r($result);
//    echo "Test dla n = $input: ";
//    echo ($result === $expected) ? "✅ OK\n" : "❌ Błąd (otrzymano $result, oczekiwano $expected)\n";
}

// TESTY (wzoruj się tylko na numerze rzędu)
echo doTest(1, 1) . PHP_EOL;
echo doTest(2, 8) . PHP_EOL;
echo doTest(4, 2197) . PHP_EOL;
