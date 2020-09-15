<?php session_start();
unset($_SESSION['username']);
if($_SESSION['role']=='cashier'){
	echo "<script>window.location = 'login-cashier.php' </script>"; 
}
else if($_SESSION['role']=='manager')
{
	echo "<script>window.location = 'login-manager.php' </script>"; 
}
?>