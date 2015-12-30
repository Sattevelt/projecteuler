<?php

require_once './common/prime.php';

$count = 0;
$num = 1;

while ($count < 10001) {
    if (Prime::isPrime($num)) {
        $count++;
        echo "Prime $count: $num\n";
    }
    $num += 2;
}

