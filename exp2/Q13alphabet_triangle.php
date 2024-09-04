<?php
$rows = 4; 
$alphabet = range('A', 'Z');

for ($i = 0; $i < $rows; $i++) {
   
    for ($j = $rows - $i; $j > 1; $j--) {
        echo "  ";
    }

    for ($j = 0; $j <= $i; $j++) {
        echo $alphabet[$j];
        if ($j < $i) {
            echo " ";
        }
    }

    for ($j = $i - 1; $j >= 0; $j--) {
        echo " " . $alphabet[$j];
    }

    echo "\n";
}
?>
