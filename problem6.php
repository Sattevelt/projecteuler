<?php

$min = 1;
$max = 100;

$sumOfSquares = 0;
$sum = 0;

for ($i = $min; $i <= $max; $i++) {
    $sumOfSquares += $i * $i;
    $sum += $i;
}

$squaredSum = $sum * $sum;

var_dump($squaredSum - $sumOfSquares);