<?php 

include 'config.php';


session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fashion Lanka Clothing Store</title>
        <meta charset="uth-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="css/administrator.css">

    </head>

    <body>
        <div class="header">
            <div class="row2">
                <div class="column2">
                    <img id="logo" src="Logo.png" alt="This is the Company Logo">
                </div>

                <div class="column2">
                    <div class="title"><h1>Fashion Lanka Clothing Store</h1></div>
                </div>
            </div>
        </div>
        
        <ul id="navigator">
            <li><a href="Home Page.html">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="About Us.html">About Us</a></li>
            <li><a href="Contact us.html">Contact Us</a></li>
            <li style="float: right;"><a href="Register Page.html">Register</a></li>
            <li style="float: right;"><a href="#">Login</a></li>
            <li style="float: right;"><a href="#" class="fa fa-user-circle"></a></li>
        </ul>
        

            <!-- form section start -->
    <section class="mockup-form">
        <div class="container">
            <!-- /form -->
           
                <div class="main-mockup">
                    <div class="form align-self">
                        <div class="left_grid_info">
                            <img src="images/images.jpg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Login Now</h2>
                        <p> Login now as a admin </p>
                        
                        <form action="" method="post">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
                            <p class="login-register-text" ><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                            <button name="submit" name="submit" class="btn" type="submit">Login</button>
                        </form>
                        <div class="login-register">
                           <p class="login-register-text">Don't have an account? <a href="Register Page.html">Register Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <h2><b>Account</b></h2>
                    <h5><div>Register</div>
                    <div>Log In</div></h5>
                </ul>
             </div>

            <div class="column">
                <h2><b>Social Media Links</b></h2>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
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
             
           </div>
        </footer>

    </body>
</html>
