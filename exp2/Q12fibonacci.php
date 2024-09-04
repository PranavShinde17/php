<?php
$n = readline("Enter the number of terms in Fibonacci series: ");
$first = 0;
$second = 1;

echo "Fibonacci Series:\n";

echo $first . "\n";
echo $second . "\n";

for ($i = 3; $i <= $n; $i++) {
    $next = $first + $second;
    echo $next . "\n";
    $first = $second;
    $second = $next;
}
?>
