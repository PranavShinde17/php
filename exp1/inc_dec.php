<?php

    $a = 5;
    $b = 10;

    echo "Initial values:\n";
    echo "a = $a\n";
    echo "b = $b\n";

    

    echo "\nUsing prefix increment:\n";
    echo "++a: " . (++$a) . "\n"; 

    echo "\nUsing postfix increment:\n";
    echo "b++: " . ($b++) . "\n"; 
    echo "After b++: b = $b\n";   

 
    echo "\nUsing prefix decrement:\n";
    echo "--a: " . (--$a) . "\n"; 


    echo "\nUsing postfix decrement:\n";
    echo "b--: " . ($b--) . "\n"; 
    echo "After b--: b = $b\n";   

?>
