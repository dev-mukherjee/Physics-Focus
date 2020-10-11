<?php
include 'dbconfig.php';

if (isset($_POST['submit'])) {
	
	 $name = mysqli_real_escape_string($con, $_POST['name']);
	 $email = mysqli_real_escape_string($con, $_POST['email']);
	 $phone = mysqli_real_escape_string($con, $_POST['phone']);
	 $message = mysqli_real_escape_string($con, $_POST['message']);

	 $insertquery = "insert into contact(name, email, phone, message) values ('$name','$email','$phone','$message')";

	 $result = mysqli_query($con, $insertquery);

	 if($result){
		header('location:index.html');
	 }else {

		?>
		<script>alert("UNABLE TO SENT MESSAGE");</script>
		
		<?php

	 }

}
?>