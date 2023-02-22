<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
   $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		  <title>Fashion Lanka Clothing Store</title>
        <meta charset="uth-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
   <a href="logout.php"<div class="logoutbtn" style="padding-left:100px;color:grey"><button>Log Out</button></div></a>
  </div>
</div>
        

<div class="topnav">
  <a class="active" href="home page.php">Home</a>
  <a href="http://localhost/project/index.php">Products</a>
  <a href="#contact">About Us</a>
  <a href="#contact">Contact Us</a>
  <input type="text1" placeholder="Search..">
</div>

<header>


            <div class="content-wrapper">
                <h1>Fashion Lanka</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=products">Products</a>
                </nav>
                
                <div class="link-icons">
                    <a href="index.php?page=cart">

            <i class="fas fa-shopping-cart"><span>$num_items_in_cart</span></i>
          </a>
                </div>
            </div>
        </header>

        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
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
EOT;
}
?>