<?php

include 'dbconn.php';


$name=$_REQUEST["name"];
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];



$query="INSERT INTO cashier (name,username,password)VALUES('$name','$username','$password')";
if ($conn->query($query) === TRUE) {
    echo "Cashier successfully"; 
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>