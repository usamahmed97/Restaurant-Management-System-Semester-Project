 <?php
 session_start();
 include 'dbconn.php';

		$bill = $_SESSION['bill'];
		if(!empty($bill)){
			$query="INSERT INTO orders (total)VALUES('$bill')";
		 if ($conn->query($query) === TRUE) {
			 echo "Cashier successfully"; 
		 } else {
			 echo "Error: " . $query . "<br>" . $conn->error;
		 }
		 $_SESSION['bill'] = NULL;
		}
	  
		$orderid;
		$query = "SELECT Max(id) as id FROM `orders` ";		 
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($result))
		{
			$orderid = $row['id'];
		}
	
	
	
	for($i = 0 ; $i< count($_POST['itemname']) ; $i++ ){
		
		$itemid =  $_POST['itemid'][$i];	
		$itemname =  $_POST['itemname'][$i];
		$itemcategory =  $_POST['itemcategory'][$i];
		$itemquantity =  $_POST['itemquantity'][$i];
		$itemprice =  $_POST['itemprice'][$i];

		 $query="INSERT INTO view_order_details (order_id,name,	category,quantity,price)VALUES('$orderid','$itemname','$itemcategory','$itemquantity','$itemprice')";
		 if ($conn->query($query) === TRUE) {
			 echo "Cashier successfully"; 
		 } 
		else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}	
			
			
		$query = "SELECT quantity as quantity FROM `items` where id = '$itemid' ";		 
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		while($row = mysqli_fetch_array($result))
		{
			$quantity = $row['quantity'];
			
			$actual = $quantity - $itemquantity;
			
			
			
			$query="UPDATE items SET quantity = '$actual' WHERE id='$itemid';";
			if ($conn->query($query) === TRUE) {
				
			}
			
			
		}	
		
			
			
		
		
			
	}
	
	
header("Location:review.php?id=$orderid");
	
 
 
 ?>