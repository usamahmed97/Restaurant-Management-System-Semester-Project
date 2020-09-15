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
<body class="add-cashier">
<a href="manager.php">GO BACK TO PREIVIOUS PAGE</a></br></br>
	<div class="container" >
	
		<h1>Add Cashier</h1>
		</br>
			<div class="row">
				<div class="col-md-4">
					<form method="POST" action="addcashier-query.php" enctype="multipart/form-data" >
					
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name"  placeholder="Enter Name" name="name">
					</div>
  
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username"  placeholder="Enter Name" name="username">
					</div>
  
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password"  placeholder="Enter Password" name="password">
				  </div>
  
						<button type="submit" class="btn btn-primary">Add</button>
					</form>

				</div>
			</div>
	</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>