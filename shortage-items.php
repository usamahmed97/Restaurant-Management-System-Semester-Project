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
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>

 <body class="body-shortage-items">
 <a href="manager.php">GO BACK TO PREIVIOUS PAGE</a></br></br>
	<div class="container" >

		<h1>Shortage Of Items</h1>
		</br>
			<div class="row">
				<div class="col-md-8">

<form action="">
				<table class="table table-light table table-striped table table-bordered">
							     <thead>
								   <tr>			 
									 <th>Item Name</th>
									 <th>Item Price</th>
									 <th>Item Quantity</th>
									 <th>Category</th>									
					<?php
						include 'dbconn.php';						
						
						$query= 'SELECT * FROM items where quantity < "0"';
						$records = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($records))
						{
							echo "<tr>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['price']."</td>";
							echo "<td>".$row['quantity']."</td>";
							echo "<td>".$row['category']."</td>";
							
						}
					?>
</tr>
</thead>
</table>
				</form>
				</div>
			</div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
