<?php
   	   
    //linking configuration file
		require 'config.php';
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$contact = $_POST['mobile'];
		$address = $_POST['address'];
		$bday = $_POST['bday'];
		$uname = $_POST['username'];
		$password = $_POST['password'];

		$sql="INSERT INTO customer(First_name,Last_name,Gender,Email,Contact,Address,Birthday,User_name,Pswrd)
		VALUES('$fname','$lname', '$gender', '$email', '$contact', '$address', '$bday', '$uname', '$password')";
			
		$result = mysqli_query($conn, $sql);

		header("Location: Login Page.php");
			
	   $conn->close();
?>
