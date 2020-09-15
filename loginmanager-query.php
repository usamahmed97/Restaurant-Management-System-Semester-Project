
<?php session_start();
 require('dbconn.php');

if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `manager` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['username']=$username;
$_SESSION['role']='manager';
   echo "<script>window.location = 'manager.php' </script>"; 
}else{
echo "<script>alert('Invalid Login Credentials');</script>"; 
echo "<script>window.location = 'login-manager.php' </script>"; 

}
}

?>
