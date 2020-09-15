<?php
$id=$_GET['id'];
include 'dbconn.php';
$query= "DELETE FROM items WHERE id='$id'";
if(mysqli_query($conn, $query))
{
	header('Location:remove-item.php');
}
else 
	echo "Not deleted ";
?>