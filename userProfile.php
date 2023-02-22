<?php
 session_start();

  if(!isset($_SESSION["currentUser"])){
  	header("Location: userProfile.php");
 }
 else{

	global $con;
	$currentUserName = $_SESSION["currentUser"];

	$con = new mysqli("localhost", "root", "", "fashionlanka");
	$sqlCmd = "SELECT * FROM customer WHERE User_name = '$currentUserName'";
	$resultSet = $con->query($sqlCmd);
	$row = $resultSet->fetch_assoc();
	// $con->close();

	$firstname = $row["First_name"];
	$lastname = $row["Last_name"];
	$username = $row["User_name"];
	$Email = $row["Email"];
	$number = $row["Contact"];
	$address = $row["Address"];
	
}
?>

<!DOCTYPE html>
<html>
	<head>
		  <title>Fashion Lanka Clothing Store</title>
        <meta charset="uth-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/userprofile.css">
        <link rel="stylesheet" href="assets/style.css">
       
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    </head>

    <body>




<div class="row3">
  <div class="column4" style="background-image: url(imgs/header2.jpg)">
   <img id="logo" src="imgs/logo2.jpg" alt="This is the Company Logo"> 
   
  </div>
  <div class="column3" style="background-image: url(imgs/header2.jpg)">
    <h1>Fashion Lanka Clothing Store</h1>
  </div>
  <div class="column5" style="background-image: url(imgs/header2.jpg)">
   <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 100px"></i>
   <a href="logout.php"><div class="logoutbtn" style="padding-left:150px;color:grey"><button>Log Out</button></div></a>
  </div>
</div>
        

<div class="topnav">
  <a class="active" href="home page.php">Home</a>
  <a href="http://localhost/project/index.php">Products</a>
  <a href="#contact">About Us</a>
  <a href="#contact">Contact Us</a>
  <input type="text1" placeholder="Search..">
</div>

      <div class="bodyDiv">

    <?php

    echo '<div class="row1">';
    echo '<div class="column_one" style="background-color:transparent;">';
        echo'<p> First Name     : <font class="userProfileValues">'.$firstname.$lastname.'</font></p>';
		echo'<p> Last Name      : <font class="userProfileValues">'.$username.'</font></p>';
		echo'<p> Contact Number : <font class="userProfileValues">'.$Email.'</font></p>';
		echo'<p> Address        : <font class="userProfileValues">'.$number.'</font></p>';
		echo'<p> User Name      : <font class="userProfileValues">'.$currentUserName.'</font></p>';
    echo '</div>';
    echo ' <div class="column_one" style="background-color:transparent;">';
  	    echo'<center><a class="userProfileAnchors" href="editProfile.php">Edit Profile</a></center>';
		echo'<center><a class="userProfileAnchors" href="deleteUserAccount.php">Delete profile</a></center>';
		echo'<center><a class="userProfileAnchors" href="aboutUs.html">About Us</a></center>';
		echo'<center><a class="userProfileAnchors" href="contactUs.html">Contact Us</a></center>';
    
  echo'</div>';
  echo'</div>';

  $con->close();
?>
		<!-- ..................................  INCLUDE YOUR CONTENT HERE .............................................. -->

		
		</div>
	<footer>
           <div class="row">
                <div class="column">
                <ul>  
                    <h2><b>Help</b></h2>
                    <h5><div>FAQ</div>
                    <div>Return policy</div>
                    <div>Payments</div></h5>            
                </ul>
             </div>
             <div class="column">
                <ul>  
                    <h2><b>Opening Hours</b></h2>
                    <h5><div>Everyday : 9.00am -9.00p.m</div>
                    </h5>
                </ul>
             </div>
             <div class="column">
                <ul>  
                    <h2><b>Contact Us</b></h2>
                    <h5><div>Telephone: +94714556766 </div>
                    <div>E-mail: fashionlanka@gmail.com</div>
                    <div>Address: 35/D ,Kandy Road, Malabe</div></h5>
                                   
                </ul>
             </div>
             <div class="column">
               <h2><b>Social Media Links</b></h2>
               <a href="#" class="fa fa-facebook" ></a>
               <a href="#" class="fa fa-twitter"></a>
               <a href="#" class="fa fa-instagram"></a>
               <a href="#" class="fa fa-youtube"></a>

             </div>
           </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>