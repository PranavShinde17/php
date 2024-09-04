<?php
$a=readline("Enter first No : ");
$b=readline("Enter first No : ");
$v=readline("1. for addition\n2. for sub\n3. for multiplication\n4.divide : ");

switch ($v) {
    case 1:
        echo "addition is ".$a+$b;
      break;
    case 2:
        echo "sub is ".$a-$b;
      break;
    case 3:
        echo "multiplication is ".$a*$b;
      break;
      case 4:
        echo "division is ".$a/$b;
        break;
    default:
      echo "Enter valid choice !!";
  }

?>