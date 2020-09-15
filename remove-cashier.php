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
</head>
<a href="manager.php">GO BACK TO PREIVIOUS PAGE</a></br></br>
 <body class="body-remove-cashier">
	<div class="container" >

		<h1>Remove Cashier</h1>
	
			<div class="row">
				<div class="col-md-4">

   				 <nav class="navbar navbar-expand-sm ">
						   <ul class="navbar-nav">
						     <li class="nav-item">
							  <div class="cashier-table">
							   <table class="table table-light table table-striped table table-bordered">
							     <thead>
								   <tr>
								     <th >Cashier_ID</th>
									 <th>Name</th>
									 <th>User_Name</th>
									 <th>Password</th>
									 <?php
include 'dbconn.php';
$query= "SELECT * FROM Cashier";
$records = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($records))
{
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "<td><a href=removecashier-query.php?id=".$row['id'].">delete</a></td>";
}
?>
									 
								   </tr>
								 </thead>
							   </table>
							  </div> 
							 </li>
						   </ul>
						 </nav>
						<div class="remove-cashier-btn">
							<a href="#" class="btn btn-primary" role="button">Remove</a>
						</div>
				</div>
			</div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
