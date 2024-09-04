<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = $rows - $i; $j > 0; $j--) {
        echo " ";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    echo "\n";
}


for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = $rows - $i; $j > 0; $j--) {
        echo " ";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    echo "\n";
}
?>
