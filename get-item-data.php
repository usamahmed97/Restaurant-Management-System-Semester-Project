 <?php
		session_start();
		$a;
		require('dbconn.php');
		$name =  strtolower($_POST['selectmanue']);
	
		$query = "SELECT * FROM `items` WHERE name='$name' ";		 
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$data = array();
		while($row = mysqli_fetch_array($result))
		{
			
			$a = $row['price'] * $_POST['quantity'];
			$_SESSION['bill'] += $a;
			$row [] = $_SESSION['bill']; 
			$data [] = $row;
			
			
		}
		
	echo json_encode($data);
	

	
 ?>