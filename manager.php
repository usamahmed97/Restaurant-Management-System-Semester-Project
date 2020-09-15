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
<body class="body-manager">

<center><h1><i><div class="alert alert-danger" role="alert">
					<a href="manager.php" class="alert-link">Manager</a>
			</div></i></h1></center>

  <div class="container" >
		<h5>Welcome To Manager Area!</h5>	
		</br>
			<div class="row">
				<div class="col-md-4">


					<div class="list-group">
						<a href="menu.php" class="list-group-item list-group-item-action">Update Menu</a>
						<a href="add-cashier.php" class="list-group-item list-group-item-action">Add Cashier</a>
						<a href="remove-cashier.php" class="list-group-item list-group-item-action">Remove Cashier</a>
						<a href="shortage-items.php" class="list-group-item list-group-item-action">View Shortage Items</a>
						<a href="revenue.php" class="list-group-item list-group-item-action">Calculate Revenue</a>
						<a href="logout.php" class="list-group-item list-group-item-action">Log Out</a>
					</div>
				</div>
			</div>
	</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>