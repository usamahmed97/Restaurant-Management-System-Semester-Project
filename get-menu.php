 <?php
 
		require('dbconn.php');
		$cname =  trim(strtolower($_POST['cname']));
	
		$query = "SELECT * FROM `items` WHERE category='$cname' and quantity > '0'";		 
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$data = array();
		while($row = mysqli_fetch_array($result))
		{
			$data [] = $row;
			
		}
	echo json_encode($data);
 ?>