<?php

$min = 100;
$max = 999;
$palindromes = [];

for ($i = $max; $i >= $min; $i--) {
    for ($j = $max; $j >= $min; $j--) {

        $product = $i * $j;
        if (isPalindrome($product)) {
            $palindromes[] = $product;
        }
    }
}

sort($palindromes);
var_dump(end($palindromes));




function isPalindrome($number)
{
    $string = (string)$number;
    if (strrev($string) == $string) {
        return true;
    }

    return false;
}

