<?php

require_once './../common/prime.php';

$primes = Prime::findsPrimesUpTo(1999999);
$sum = 0;
foreach ($primes as $prime) {
    $sum += $prime;
}
var_dump($sum);
