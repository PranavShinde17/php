
<?php
  
    $queue = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    
    echo "Original array:\n";
    print_r($queue);
    echo "\n\n";
    
    
    $removedElement = array_shift($queue);
    echo "Removed element: $removedElement\n";
    echo "Array after removing the first element:\n";
    print_r($queue);
    echo "\n\n";
    
    
    array_unshift($queue, 0);
    echo "Array after adding element at the beginning:\n";
    print_r($queue);
    echo "\n\n";
    
?>