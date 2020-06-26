<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	 $username = $_POST['username'];
	 $email= $_POST['email'];
	 $password = $_POST['password'];
	 
	 $sql = "INSERT INTO user(username,email,password)
	 VALUES ('$username','$email','$password')";
	 if (mysqli_query($conn, $sql)) {
	 	
	header('location:login.php');
	echo "You have successfully registered!";
	 	echo "Please login";	
	
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
								