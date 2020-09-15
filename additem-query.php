<html>
<head>

</head>

<?php
include 'dbconn.php';
$ItemName=$_POST["ItemName"];
$price=$_POST["price"];
$category=$_POST["category"];
$quantity=$_POST["totalQuantity"];
$unit=$_POST["unit"];


$query="INSERT INTO items (name,price,quantity,category,Unit) VALUES ('$ItemName','$price','$quantity','$category', '$unit');";
if ($conn->query($query) === TRUE) {
	echo "Item Added";
	sleep(15);
	echo "<script>window.location = 'menu.php' </script>"; 
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>



</html>