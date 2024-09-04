<?php

$subject1 = readline("Enter marks for subject 1: ");
$subject2 = readline("Enter marks for subject 2: ");
$subject3 = readline("Enter marks for subject 3: ");
$subject4 = readline("Enter marks for subject 4: ");
$subject5 = readline("Enter marks for subject 5: ");

$totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;

$percentage = ($totalMarks / 500) * 100;


if ($percentage >= 90) {
    echo "Percentage: $percentage% - Grade A";
} elseif ($percentage >= 80) {
    echo "Percentage: $percentage% - Grade B";
} elseif ($percentage >= 70) {
    echo "Percentage: $percentage% - Grade C";
} elseif ($percentage >= 60) {
    echo "Percentage: $percentage% - Grade D";
} elseif ($percentage >= 50) {
    echo "Percentage: $percentage% - Grade E";
} elseif ($percentage >= 40) {
    echo "Percentage: $percentage% - Pass";
} else {
    echo "Percentage: $percentage% - Fail";
}
?>
