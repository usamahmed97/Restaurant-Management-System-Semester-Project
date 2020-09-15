<?php

?>
<!Doctype html> 
<html lang="en">
<head>
<title>
	Restaurant system 
</title>
<center>
 
</center>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<meta name=description" content="">
<meta name="author" content="">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">

<!---[if it IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head> <!--/head-->


<body class="body_login"> 
<a href="index.php">GO BACK TO PREIVIOUS PAGE</a>
	<div class="main">
	<div id="main-wrapper">
		<center> <br/>
			<h2> Login</h2>
			<img src="img/images.jpg" class="login_images"/>
				<div class="login_form">
				<form class="form-group" action=" loginmanager-query.php " method="POST">

				  <label>Username:</label>
				  <input type="text" class="form-control" name="username" id="name" placeholder="Type your username" />
				  <label>Password:</label>
				  <input type="password" class="form-control" name="password" id="password" placeholder="Type your username" /><br>
				   <button value="LOGIN" id="login" name='login' class="form-control btn btn-primary" >LOGIN</button> </br>
				 <br/>
				</form>
				</div>
		</center>
	</div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>