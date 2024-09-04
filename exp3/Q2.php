
<?php
   
    $months = [
        1 => "January",
        2 => "February",
        3 => "March",
        4 => "April",
        5 => "May",
        6 => "June",
        7 => "July",
        8 => "August",
        9 => "September",
        10 => "October",
        11 => "November"
    ];
    

    $months[12] = "December";
    

    echo "The 5th month is: " . $months[5]; 
    echo "\n\n";
    
  
    echo "Using print_r():\n";
    print_r($months);
    echo "\n\n";
    
    echo "Using var_dump():\n";
    var_dump($months);
    echo "\n\n";
    
    
    echo "Looping through the array using foreach():\n";
    foreach ($months as $key => $value) {
    echo "Key: $key- Value: $value\n";
    }
    echo "\n";

    $flippedMonths = array_flip($months);
    echo "Swapped keys and values using array_flip():\n";
    print_r($flippedMonths);
    echo "\n\n";
    

    if (in_array("May", $months)) {
        echo "Value 'May' exists in the array.\n";
    } else {
        echo "Value 'May' does not exist in the array.\n";
    }
    

    if (array_key_exists(6, $months)) {
        echo "Key 6 exists in the array.\n";
    } else {
        echo "Key 6 does not exist in the array.\n";
    }
    echo "\n";
    

    $key = array_search("August", $months);
    echo "The key for the value 'August' is: $key";
    echo "\n\n";
        
?>
