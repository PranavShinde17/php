<?php
class Parents {
   public static $balance=1000;

   function Deposit($balance) {
        self::$balance+=$balance; 
   }

   function Withdraw($balance) {
    if($balance<=self::$balance) {
        self::$balance-=$balance;
    }
   }
}

class Son extends Parents {
    function show() {
        echo self::$balance;
    }
}

$s1=new Son();
$s1->Withdraw(500);
$s1->Deposit(1000);
$s1->show();

?>