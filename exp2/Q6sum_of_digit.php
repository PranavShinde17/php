<?php

$number = readline("Enter a number: ");

$sum = 0;

while ($number != 0) {
    $digit = $number % 10; 
    $sum += $digit;
    $number = (int)($number / 10);
}

echo "The sum of the digits is: " . $sum;
?>
