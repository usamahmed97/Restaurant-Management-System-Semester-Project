<?php 


?>

<html>

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


<?php
include 'dbconn.php';
$id=$_GET['id'];


$query="SELECT * FROM items where id='$id'";
$records = mysqli_query($conn, $query);

?>
<body class="body-add-item">
<div class="row">
<div class="container" >

		<h1>Update Item</h1>
		</br>
		<div class="row">
			<div class="col-md-6">
<?php while($row = mysqli_fetch_array($records))
						{
							?>
				<form method="POST" action=<?php echo "updatedbitem-query.php?id=".$row['id'] ?> enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="ItemName">Item Name</label>
						<input type="text" class="form-control" id="ItemName"  placeholder="Enter Item Name" name="ItemName" value="<?php echo $row['name'];?>" required>
					</div>
					
					<div class="form-group">
						<label for="price">Price</label>
						<input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="<?php echo $row['price'];?>" required>					
					</div>

					<div class="form-group">
						<label for="price">Quantity</label>
						<input type="text" class="form-control" id="totalQuantity" placeholder="Enter Quantity" name="totalQuantity" value="<?php echo $row['quantity'];?>" required>					
					</div>
														
					<div class="form-group">
						<label for="category">Category</label>
						<input type="text" class="form-control" id="category" placeholder="Enter Category" name="category" value="<?php echo $row['category'];?>"  required>					
					</div>
					
					<div class="form-group">
						<label for="unit">Unit</label>
						<input type="text" class="form-control" id="unit"  placeholder="Enter Unit Name" name="unit" value="<?php echo $row['Unit'];?>" required>
					</div> 
					<?php	} ?>				

				<button type="submit" class="btn btn-primary">Add</button>
				</form>
				
			</div>
		</div>
					</div>
		</div>
		</body>
		
		</html>
		
		
		<?php
		
		if (isset($_POST['submit'])) {
include 'dbconn.php';
$ItemName=$_POST["ItemName"];
$price=$_POST["price"];
$category=$_POST["category"];
$quantity=$_POST["totalQuantity"];
$unit=$_POST["unit"];


$query="UPDATE items SET name = '$ItemName', price = '$price',category = '$category',quantity = '$quantity',Unit = '$unit' WHERE id='$id';";
if ($conn->query($query) === TRUE) {
    echo "<script>window.location = 'update-item.php' </script>"; 
} else {
    echo "<script>alert('gfhgf') </script>"; 
}

$conn->close();

		}
		
		?>