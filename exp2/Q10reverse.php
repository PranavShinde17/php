<?php
$number = readline("Enter a number: ");
$reversedNumber = 0;

while ($number != 0) {
    $digit = $number % 10;
    $reversedNumber = $reversedNumber * 10 + $digit;
    $number = (int)($number / 10);
}

echo "Reversed number: " . $reversedNumber . "\n";
?>
