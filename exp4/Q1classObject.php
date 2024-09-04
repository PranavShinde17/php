<?php
class Holiday {
    private $name;
    private $day;
    private $month;

        function __construct ($name,$day,$month) {
        $this->name=$name;
        $this->day=$day;
        $this->month=$month;
    }


    function isSameMonth($h) {
        if($h->getmonth()==$this->month) {
            return '1';
        }
        else{
        return '0';
        }

    }

    function getmonth() {
        return $this->month;
    }

}
$h=new Holiday("Niranjan",1,"May");
$h1=new Holiday("Sarang",2,"May");
$h2=new Holiday("Pranav",3,"July")
echo $h->isSameMonth($h1);
?>
