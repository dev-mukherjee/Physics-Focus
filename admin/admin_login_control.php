<?php
include '../dbconfig.php';


if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


	$username = $_POST["username"];
	$password = $_POST["password"];

	$query = "Select * from admin where username ='$username' AND password='$password'";
	$queryresult = mysqli_query($con, $query);
	$num = mysqli_num_rows($queryresult);

	if($num == 1){
		echo'Passwords match';
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
		header("location: admin_home.php");
	}else{
		echo'Passwords do not match';
	}
}
?>