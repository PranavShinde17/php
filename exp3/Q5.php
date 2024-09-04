

<?php
    
    $st = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    
    echo "Original array:\n";
    print_r($st);
    echo "\n\n";
    
    
    array_push($st, 11);
    echo "Array after adding an element at the end using array_push():\n";
    print_r($st);
    echo "\n\n";
    
    
    $removedElement = array_pop($st);
    echo "Removed element: $removedElement\n";
    echo "Array after removing the last element using array_pop():\n";
    print_r($st);
    echo "\n\n";
    
?>