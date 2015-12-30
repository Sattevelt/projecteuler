<?php

$min = 1;
$max = 100;
$sum = 0;

for ($i = $min; $i <= $max; $i++) {

    if ($i % 15 == 0 || $i % 5 == 0 || $i % 3 == 0) {
        $sum += $i;
    }
}

echo $sum . "\n";

