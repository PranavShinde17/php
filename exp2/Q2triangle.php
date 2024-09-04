<?php

$a = readline("Enter the length of the first side: ");
$b = readline("Enter the length of the second side: ");
$c = readline("Enter the length of the third side: ");


if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {

    if ($a == $b && $b == $c) {
        echo "The triangle is Equilateral.";
    } else {
        if ($a == $b || $b == $c || $a == $c) {
            echo "The triangle is Isosceles.";
        } else {
            echo "The triangle is Scalene.";
        }
    }
} else {
    echo "The given lengths do not form a triangle.";
}
?>
