<?php
$servername = "localhost:3307";
$username = "root";
$password = "";


$conn =  mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE myDatabase";
if (mysqli_query($conn, $sql)) {
    echo "\nDatabase created successfully";
} else {
    echo "\nError creating database: " . $conn->error;
}

$sql = "use myDatabase";
if (mysqli_query($conn, $sql)) {
    echo "\n\nUsing myDatabase Database successfully";
} else {
    echo "\n\nError creating database: " . $conn->error;
}

$sql = "create table student(name varchar(20), id int, dept varchar(20))";
if (mysqli_query($conn, $sql)) {
    echo "\n\nTable Created successfully";
} else {
    echo "\n\nError creating table: " . $conn->error;
}

$name="Sarang";
$dept="IT";
$sql = "INSERT INTO student VALUES('Sarang',263,'IT')";
if (mysqli_query($conn, $sql)) {
    echo "\n\nValue Inserted successfully";
} else {
    echo "\n\nError Insert value: " . $conn->error;
}

$sql = "SELECT * FROM STUDENT";
$result=mysqli_query($conn, $sql);
if($result) {
    echo "\n\nValue Fetched successfully\n\n";
    while($row = mysqli_fetch_array($result)) {
        echo "Name: " . $row["name"] . "    ID: " . $row["id"] . "    dept: " . $row["dept"] . "\n";
    }

} else {
    echo "\n\nError fetching value: " . $conn->error;
}


// $sql = "SELECT * FROM STUDENT WHERE dept='IT'";
// $result=mysqli_query($conn, $sql);
// if($result) {
//     echo "\n\nValue Fetched successfully\n\n";
//     while($row = mysqli_fetch_array($result)) {
//         echo "Name: " . $row["name"] . "    ID: " . $row["id"] . "    dept: " . $row["dept"] . "\n";
//     }

// } else {
//     echo "\n\nError fetching value: " . $conn->error;
// }

$sql="UPDATE STUDENT SET dept='CSE' WHERE ID=263";
$result=mysqli_query($conn, $sql);
if($result) {
    echo "\nValue Updated successfully\n\n";

} else {
    echo "\nError Updating value: " . $conn->error;
}

$sql = "SELECT * FROM STUDENT";
$result=mysqli_query($conn, $sql);
if($result) {
    echo "\n\nValue Fetched successfully\n\n";
    while($row = mysqli_fetch_array($result)) {
        echo "Name: " . $row["name"] . "    ID: " . $row["id"] . "    dept: " . $row["dept"] . "\n";
    }

} else {
    echo "\n\nError fetching value: " . $conn->error;
}


$sql="DELETE FROM STUDENT WHERE ID=263";
$result=mysqli_query($conn, $sql);
if($result) {
    echo "\n\nValue DELETED successfully\n\n";

} else {
    echo "\n\nError DELETED value: " . $conn->error;
}

$sql="DROP TABLE STUDENT";
$result=mysqli_query($conn, $sql);
if($result) {
    echo "\nTable DELETED successfully\n\n";

} else {
    echo "\nError DELETED Table: " . $conn->error;
}



$sql = "DROP DATABASE MyDatabase";
$result=mysqli_query($conn, $sql);
if($result) {
    echo "\nDatabase Droped successfully\n\n";

} else {
    echo "\nError Droping Database: " . $conn->error;
}


$conn->close();
?>