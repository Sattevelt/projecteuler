<?php


for ($a = 1; $a < 500; $a++) {

    for ($b = $a + 1; $b < 1000; $b++) {

        $c = 1000 - ($a + $b);

        if (isPythagoranTriplet($a, $b, $c)) {
            break 2;
        }
    }
}
var_dump($a, $b, $c);
var_dump($a * $b * $c);

function isPythagoranTriplet($a, $b, $c)
{
    if ($a >= $b || $b >= $c) {
        return false;
    }

    return (
        $a + $b + $c == 1000 &&
        ($a * $a) + ($b * $b) == ($c * $c)
    );
}