<?php

$numbers = array(20,19,18,17,16,15,14,13,12,11);
$check = 21;

while (true) {
    $check++;
    
    foreach ($numbers as $number) {
        if ($check % $number != 0) {
            continue 2;
        }
    }
    break;
}
var_dump($check);