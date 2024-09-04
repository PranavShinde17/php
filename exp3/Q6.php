

<?php
   
    $physics = [56, 78, 90, 67, 89, 45, 76, 88, 92, 81];
    $chemistry = [66, 88, 70, 77, 99, 55, 86, 98, 72, 91];
    $maths = [76, 68, 80, 87, 79, 65, 96, 78, 82, 71];
    
    $allMarks = array_merge($physics, $chemistry, $maths);
    
    print_r($allMarks);
    $maxMarks = max($allMarks);
    echo "The maximum marks among all subjects are: $maxMarks\n";

    $minMarks = min($allMarks);
    echo "The minimum marks among all subjects are: $minMarks\n";
    
?>