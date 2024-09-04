<?php

$char = readline("Enter a character: ");

$ascii = ord($char);

if ($ascii >= 65 && $ascii <= 90) {
    echo "The character '$char' is an uppercase letter.";
} elseif ($ascii >= 97 && $ascii <= 122) {
    echo "The character '$char' is a lowercase letter.";
} else {
    echo "The character '$char' is neither an uppercase nor a lowercase letter.";
}
?>
