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
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body class="body-add-item">
<a href="menu.php">GO BACK TO PREIVIOUS PAGE</a></br></br>
	<div class="container" >

		<h1 style="text-align:center; font-family:raleway">Add Item</h1>
		</br>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<form method="POST" action="additem-query.php" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="ItemName">Item Name</label>
						<input type="text" class="form-control" id="ItemName"  placeholder="Enter Item Name" name="ItemName" required>
					</div>
					
					<div class="form-group">
						<label for="price">Price</label>
						<input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" required>					
					</div>

					<div class="form-group">
						<label for="price">Quantity</label>
						<input type="text" class="form-control" id="totalQuantity" placeholder="Enter Quantity" name="totalQuantity" required>					
					</div>
														
					<div class="form-group">
						<label for="category">Category</label>
						<input type="text" class="form-control" id="category" placeholder="Enter Category" name="category" required>					
					</div>
					
					<div class="form-group">
						<label for="unit">Unit</label>
						<input type="text" class="form-control" id="unit"  placeholder="Enter Unit Name" name="unit" required>
					</div> 
					<div style="text-align:center;">
					<button type="submit"  class="btn btn-primary">Add Item</button>
					</div>
				</form>
			</div>
		</div>
	</div>
     

<script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>
</html>