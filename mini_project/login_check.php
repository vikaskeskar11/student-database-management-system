<?php session_start();
error_reporting(1);

include 'config.php';

$user_name = $_POST["username"];
$user_pass = $_POST["password"];

if($conn)
{ 
	$query = "SELECT * FROM users_login WHERE username= '$user_name' AND password = '$user_pass'";
	$result =mysqli_query($conn,$query);
	$num = mysqli_num_rows($result);

	if($num>0)
	{
	header("Location:index.php");
		$_SESSION['loginValidity'] = "true";
		
	}else{
		header('Location:login.php?try=false');
	}
	mysqli_close($conn);
}else
{
	echo "Connection Problem";
}

?>