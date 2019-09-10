<?php

// Find prime factors for given number

function primeFactors($number) : array {
    $result = [];
    for ($i = 2; $number > 1; $i++) {
        if ($number % $i == 0) {
            $number /= $i;
            array_push($result, $i);
            $i--;
        }
    }
    return $result;
}

print_r(primeFactors(21));

// Alperen Cubuk

?>