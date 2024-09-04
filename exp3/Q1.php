<?php
//creating array 
$arr=["Pranav","Sarang","Ritesh","Niranjan","Shubham","Pranav"];


// traverse using foreach
foreach($arr as $i) {
    echo $i." \n";
}

//assessing individual element
echo $arr[0]." \n";

//using array_slice()
print_r(array_slice($arr,1,3));

//insert element in array
$arr[]="Shreyash";
print_r($arr);

//var_dump gives length of the string
var_dump($arr);

//gives total elements in array
echo count($arr)."\n";
echo sizeof($arr);

//each element occurance
print_r(array_count_values($arr));

//sorting array 
sort($arr);
print_r($arr);

asort($arr);
print_r($arr);

rsort($arr);
print_r($arr);

//printing current, next, prev, end, reset element 
echo current($arr)."\n";
echo next($arr)."\n";
echo end($arr)."\n";
echo reset($arr)."\n";

$num=array(23,4,5,4,5,23,5,67,23);
print_r(array_unique($arr));


?>