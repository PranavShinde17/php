<?php


$a = (int)readline("Enter first number: ");
$b = (int)readline("Enter second number: ");
$c = (int)readline("Enter third number: ");


$max = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo "The maximum number is: $max\n";
?>
