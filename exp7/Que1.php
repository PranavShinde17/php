<?php

$con = new mysqli("localhost:3306", "root", "pranav@123");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// $sql = "CREATE DATABASE myDatabase";
// if (mysqli_query($con,$sql) == TRUE) {
//     echo "Created myDatabase Database successfully";
// } else {
//     echo "Error creating database: " . mysqli_error();
// }

$sql = "use myDatabase";
if (mysqli_query($con,$sql) == TRUE) {
    echo "Using myDatabase Database successfully";
}
 else {
    echo "Error creating database: " . mysqli_error();
}

// $sql = "create table student(name varchar(20), id int, dept varchar(20))";
// if (mysqli_query($con,$sql) === TRUE) {
//     echo "\nTable Created successfully";
// } else {
//     echo "\nError creating table: " . mysqli_error();
// }
$name="Pranav";
$dept="IT";
$sql = "INSERT INTO student VALUES('Pranav',1,'IT')";
if (mysqli_query($con,$sql) === TRUE) {
    echo "\nValue Inserted successfully";
} else {
    echo "\nError Insert value: " . mysqli_error();
}
mysqli_close($con);
?>