<?php

?>
<!Doctype html> 
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
 
<meta name=description" content="">
<meta name="author" content="">
<title> Restaurant Managment </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="revenue">
<a href="manager.php">GO BACK TO PREIVIOUS PAGE</a></br></br>
	<div class="container">

	 <h1>Total Revenue</h1>
	 </br>
	 
	 
	 
	 
	 <form action="">
				<table class="table table-light table table-striped table table-bordered">
							     <thead>
								   <tr>			 
									 
									 <th>Order ID</th>
									 <th>Bill</th>
					<?php
						include 'dbconn.php';						
						//$id=$_GET['id'];
						$query= "SELECT * FROM orders";
						$records = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($records))
						{
							echo "<tr>";
							echo "<td>".$row['id']."</td>";
							echo "<td>".$row['total']."</td>";
							
						}
					?>
</tr>
</thead>
</table>
				</form>
			
			<?php
				
						
						
						$query= "SELECT SUM(total) As 'total' FROM orders ";
						$records = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($records))
						{
							echo "<tr>";
							
					?>
			<br/>
			<br/>
		
				
			
				<h3>Total Revenue : <?php 	
				echo $row['total'];
				}
					?></label>
				
				
					
			
    </div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
