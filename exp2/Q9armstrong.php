<?php
$number = readline("Enter a number: ");
$temp = $number;
$sum = 0;
$digit = 0;

while ($temp > 0) {
    $digit = $temp % 10;
    $sum += pow($digit, strlen((string)$number));
    $temp = (int)($temp / 10);
}

if ($sum == $number) {
    echo "$number is an Armstrong number.\n";
} else {
    echo "$number is not an Armstrong number.\n";
}
?>
