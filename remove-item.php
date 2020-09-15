<?php session_start();

if(!isset($_SESSION['username']))
{
	echo "<script>Login to continue</script>"; 
	echo "<script>window.location = 'login-manager.php' </script>"; 
}

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
</head>

<body>
<body class="body-remove-item">
<a href="menu.php">GO BACK TO PREIVIOUS PAGE</a></br></br>
	<div class="container" >

		<h1>Remove Item</h1>
		</br>
		<div class="row">
			<div class="col-md-12">

				<form action="">
				<table class="table table-light table table-striped table table-bordered">
							     <thead>
								   <tr>			 
									 <th>Item Name</th>
									 <th>Item Price</th>
									 <th>Item Quantity</th>
									 <th >Category</th>
									 <th>Unit</th>
									 <th>Delete Item</th>
									
					<?php
						include 'dbconn.php';
						$query= "SELECT * FROM items";
						$records = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($records))
						{
							echo "<tr>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['price']."</td>";
							echo "<td>".$row['quantity']."</td>";
							echo "<td>".$row['category']."</td>";
							echo "<td>".$row['Unit']."</td>";
							echo "<td><a href=removeitem-query.php?id=".$row['id'].">Delete Item</a></td>";
						}
					?>
</tr>
</thead>
</table>
				</form>
			</div>
		<div>
	</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>