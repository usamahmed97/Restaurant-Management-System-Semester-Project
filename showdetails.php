<!Doctype html> 
<?php session_start();

if(!isset($_SESSION['username']))
{
	echo "<script>Login to continue</script>"; 
	echo "<script>window.location = 'login-manager.php' </script>"; 
}

?>
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
<a href="cashier.php">GO BACK TO PREIVIOUS PAGE</a></br></br>
	<div class="container" >
		<h1>Order Details</h1>
		</br>
		<div class="row">
			<div class="col-md-12">

				<form action="">
				<table class="table table-light table table-striped table table-bordered">
							     <thead>
								   <tr>			 
									 <th>Item Name</th>
									 <th>Item Quantity</th>
									 <th>Category</th>
									 <th>Bill</th>
					<?php
						include 'dbconn.php';						
						$id=$_GET['id'];
						$query= "SELECT * FROM view_order_details  where order_id='$id'";
						$records = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($records))
						{
							echo "<tr>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['quantity']."</td>";
							echo "<td>".$row['category']."</td>";
							echo "<td>".$row['price']."</td>";
						}
					?>
</tr>
</thead>
</table>
				</form>				
				<?php
				$query= "SELECT sum(price) as 'total' from view_order_details  where order_id='$id'";
						$records = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($records))
						{
							
						?>
						<h4> Total Bill:  <?php echo "<td>".$row['total']."</td>";} ?> </h4>						
						<button onclick="window.print();" value="Print Now" class="btn btn-primary"> Generate Receipt </button>
			</div>
		<div>
	</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>