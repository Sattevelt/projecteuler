<?php

$term1 = 1;
$term2 = 1;
$newTerm = 0;
$sumOfEvenTerms = 0;

while ($term2 < 4000000) {
    $newTerm = $term1 + $term2;
    $term1 = $term2;
    $term2 = $newTerm;

    if ($newTerm % 2 == 0) {
        $sumOfEvenTerms+= $newTerm;
    }
}

echo $sumOfEvenTerms . "\n";