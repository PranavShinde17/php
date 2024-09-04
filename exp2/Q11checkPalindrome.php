<?php
$number = readline("Enter a number: ");
$temp = $number;
$reverse = 0;
while ($temp != 0) {
    $remainder = $temp % 10;
    $reverse = $reverse * 10 + $remainder;
    $temp = (int)($temp / 10);
}
if ($number == $reverse) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}
?>
