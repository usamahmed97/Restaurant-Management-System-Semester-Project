<?php session_start();
$id = $_GET['id'];
include 'dbconn.php';
$ItemName=$_POST["ItemName"];
$price=$_POST["price"];
$category=$_POST["category"];
$quantity=$_POST["totalQuantity"];
$unit=$_POST["unit"];


$query="UPDATE items SET name = '$ItemName', price = '$price',category = '$category',quantity = '$quantity',Unit = '$unit' WHERE id='$id';";
if ($conn->query($query) === TRUE) {
    echo "<script>window.location = 'update-item.php' </script>"; 
} else {
    echo "<script>alert('gfhgf') </script>"; 
}

$conn->close();
?>