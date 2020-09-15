<?php
session_start();
?>
<!Doctype html> 
<html lang="en">
<head>
<title>
Restaurant system 
</title>

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


<body class="body_cust">
 
 <center><h1><i><div class="alert alert-danger" role="alert">
					<a href="customer.php" class="alert-link">Place Order...</a>
					</div></i></h1></center>
 
 <a href="index.php">GO BACK TO PREIVIOUS PAGE</a></br></br>
<div class="container">

<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
		<li class="nav-item">
		<form id="additem" action="" method="post">
			<div id="customer_dropdown">
					<label for="sel1"><b>Select Category</b></label>
					  <select class="form-control" name="selectquantity" id="selectquantity">
						<option >--------------</option>
						<option value="Chinese">Chinese</option>
						<option value="Continental">Continental</option>
						<option value="Desi">Desi</option>
						<option value="Beverages">Beverages</option>
					  </select>
		</div>
		</li>		
		<li class="nav-item">
					<div id="customer_dropdown">
					<label for="sel1"><b>Select Menu</b></label>
					  <select class="form-control"  name="selectmanue" id="selectmanue">
						<option >--------------</option>
					  </select>
					 </div> 
		    
		</li>			
		<li class="nav-item">
			  
					<div class="customer_form"> 
						<b> <label>Quantity</label> <b>
						<input  type="text"  id="quantity" name="quantity" class="form-control" placeholder="Enter Quantity" />
						<input type="submit"   class="btn btn-primary" value="Go!" > 
				    </div>
			  </form>	  
		</li>
  </ul>
</nav>
<br/><br/>
	

			<div class="col-md-9">
						<div class="menu_table">
							<table class="table table-light table table-striped table table-bordered">
								<thead>
								  <tr>
									<th >Item Name</th>
									<th>Category</th>
									<th>Quantity</th>
									<th>Price</th>
								  </tr>
								</thead>
				<form id="confirm" action="confirm.php" method="POST">
				
								<tbody id="appenditems">
									
								</body>
							
							</table>
						</div> 
			</div> 
				
			

<br>
	
	   <div class="cust_footer_btn" style="margin-bottom:100px">
	   
			
					<label >Total Amount:</label> 
					<label id="tbill"></label> 
						
					<br>
						
				
			<input type="submit" class="btn btn-primary" value="Confirm">
			<button type="button" class="btn btn-primary" id="cancel">Cancel</button>
					
			</form>
			
		</div>

</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>




<script>

	$(document).ready(function(){
		$("#selectquantity").on("change",function(){
			
			var cname = $(this).val();
			
			 $.ajax({
				 method:'POST',
				 url: "get-menu.php",
				data:{
					'cname': cname
				},	
				 success: function(response){
					var select = $('#selectmanue');
					if(response.length > 1	){
						select.empty();
						$.each(jQuery.parseJSON(response), function( index, value ) {
								var item = jQuery.parseJSON(response)[index][1];
							  console.log();
							  select.append('<option value="'+item+'">'+item+'</option>');
							});
					}
					else
					{
						select.empty();
						$.each(jQuery.parseJSON(response), function( index, value ) {
								var item = jQuery.parseJSON(response)[index][1];
							  console.log();
							  select.append('<option value="">--------------</option>');
							});
					}
					
				}
			});
		});
		
		
		
		$("#additem").submit(function(event){
			console.log("submit");
			var formdata = $(this).serialize();
			var quantity = $('#quantity').val()
			if ($('#quantity').val()<= 0  ){
				alert("Please enter valide quantity");
			}
			
			if($('#quantity').val() > 0)
			{
				
				 $.ajax({
				 method:'POST',
				 url: "get-item-data.php",
				data: formdata,	
				 success: function(response){
						var table = $('#appenditems');
						
						
						$.each(jQuery.parseJSON(response), function( index, value ) {
							var item_id = jQuery.parseJSON(response)[index][0];
							var item_name = jQuery.parseJSON(response)[index][1];
							
							var item_category = jQuery.parseJSON(response)[index][4];
							var item_price = jQuery.parseJSON(response)[index][2] * quantity;
							var total = jQuery.parseJSON(response)[index][6] ;
								console.log(jQuery.parseJSON(response)[index][6])
							
						  table.append('<tr><td>'+item_name+'</td><td>'+item_category+'</td><td>'+quantity+'</td><td>'+item_price+'</td></tr>');
						  $("#confirm").append('<input type="hidden" value="'+item_id+'" name="itemid[]">');
						  $("#confirm").append('<input type="hidden" value="'+item_name+'" name="itemname[]">');
						  $("#confirm").append('<input type="hidden" value="'+item_category+'" name="itemcategory[]">');
						  $("#confirm").append('<input type="hidden" value="'+quantity+'" name="itemquantity[]">');
						  $("#confirm").append('<input type="hidden" value="'+item_price+'" name="itemprice[]">');
						  $("#confirm").append('<input type="hidden" value="'+total+'" name="totalamount">');
						  $('#tbill').html('<span>'+total+'</span>');
						
						});
				}
			});
			}
			
			
			event.preventDefault();
		})
		
		
		$("#cancel").on("click",function(event){
			
			console.log("clicked");
			$('#appenditems').empty();
			$('#additem').trigger('reset');
			$.ajax({
				 method:'POST',
				 url: "clear-bill.php",
				 success: function(response){
					  $('#tbill').html('<span>0</span>');	
				 }					  
					});
			
			
			
			
		event.preventDefault();	
		});
		
	});

</script>



















</body>
</html>