<?php

?>
<!Doctype html> 
<html lang="en">
<head>
<br/>
<center><h1><b> Your Review! </b> </h1></center>
<title>
	Restaurant system 
</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<meta name=description" content="">
<meta name="author" content="">
<title> Pucit Project</title>
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


<?php
session_start();
include 'dbconn.php';
$var;
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_GET['id'])){
				$id = $_GET['id'];
		
		$review = $_POST['review'];
		$phone = $_POST['phone'];
		
			 $query="INSERT INTO review (orderid,food_quality,phone)VALUES('$id','$review','$phone')";
			 if ($conn->query($query) === TRUE) {
					$var = '1';
			 } 
			else {
				echo "Error: " . $query . "<br>" . $conn->error;
				$var = '0';
			}
		}	
	}
?>
<body class="body_review">
<a href="customer.php">GO BACK TO PREIVIOUS PAGE</a></br></br>

		<div class="container">

			   <div class="review_form"> `
				    <form action="" method="post">
						<div class="col-md-6"><b> Your Review  : </b> 
							<textarea class="form-control" name="review" cols="10" rows="10">
								
							</textarea>
						</div>
						<div class="col-md-6"><b> Phone No : </b>
						<input  type="text"  class="form-control" placeholder="+92xxx-xxxxxxx" name="phone" /></div>
						
						
						<div class="col-md-6">
						<br>
							<input type="submit" class="btn btn-primary" value="Submit">
						</div>
				    </form>
					
					<div class="col-md-6">
					<br>
						<?php 
						if(isset($var) && $var==1){
							echo '<div class="alert alert-danger">';
								echo "Review submitted successfully!";
							echo '</div>';
						}						
						?>
					</div>
				</div> 

			

			
		   
		</div>



<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>