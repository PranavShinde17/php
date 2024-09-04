<?php

$a = (int)readline("Enter first number: ");
$b = (int)readline("Enter second number: ");

echo "Bitwise AND (a & b): " . ($a & $b) . "\n";
    echo "Bitwise OR (a | b): " . ($a | $b) . "\n";
    echo "Bitwise XOR (a ^ b): " . ($a ^ $b) . "\n";
    echo "Bitwise NOT (~a): " . (~$a) . "\n";
    echo "Bitwise NOT (~b): " . (~$b) . "\n";
    echo "Left Shift (a << 1): " . ($a << 1) . "\n"; 
    echo "Right Shift (a >> 1): " . ($a >> 1) . "\n";
?>
