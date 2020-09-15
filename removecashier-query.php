<?php
include 'dbconn.php';

$query= "DELETE FROM cashier WHERE id='$_GET[id]'";
if(mysqli_query($conn, $query))
{
	header("refresh:1; url=remove-cashier.php" );
}
else 
	echo "Not deleted ";
?>