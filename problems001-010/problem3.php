<?php

$number = 600851475143;
$max = (int)ceil($number / 2);
$factor = 2;


while ($number > 1) {
    if ($number % $factor == 0) {
        $number = (int) $number / $factor;
    } else {
        $factor++;
    }
}

var_dump($factor);
