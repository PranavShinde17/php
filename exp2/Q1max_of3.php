<?php
$a = readline("Enter first no. ");
$b = readline("Enter second no. ");
$c = readline("Enter third no. ");

    $max = $a;

    if ($b > $max) {
        $max = $b;
    }

    if ($c > $max) {
        $max = $c;
    }



echo "The maximum number between $a, $b, and $c is $max ";

?>