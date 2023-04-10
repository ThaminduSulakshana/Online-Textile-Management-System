<?php
    $servername="localhost";
    $username="root";	
	$password="";
	$database="book_store3";

	 //Create connection
	   $conn=mysqli_connect($servername,$username,$password,$database);
	 
	//ckeck connection
	if(!$conn){
		die("Connection failed:".mysqli_connect_error());
	}
	
	
	$Name=$_POST['Fullname'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];   
	$zico=$_POST['zico'];   
	$Dmethod=$_POST['dmethod'];
	$district=$_POST['district'];
	$Mtype=$_POST['Mtype'];   
	$Cname=$_POST['cname']; 
        $day=$_POST['day'];
	$cvv=$_POST['cvv'];
	$Ctype=$_POST['Ctype'];    
	$bank=$_POST['bank'];
	
    //Insert user data into payment table.	 
	$sql= "INSERT INTO payment(Name,Address,Mobile,zipcode,DeliveryMethod,District,Method,CardName,ExpiryDate,CVV,CardType,Bank) 
	VALUES ('$Name','$address','$mobile','$zico','$Dmethod','$district','$Mtype','$Cname','$day','$cvv','$Ctype','$bank')";
	
	//Show message when user added data.
	if(mysqli_query($conn,$sql)==TRUE){
		echo"<script>alert('Details Added');window.location.href='Success.html';</script>";
	}else{
		echo"Error:".$sql2. "<br/>".mysqli_error($conn);
		
	}
	
	mysqli_close($conn);
?>