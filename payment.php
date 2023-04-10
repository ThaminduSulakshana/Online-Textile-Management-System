<!DOCTYPE HTML>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/Styles.css">
   <script src="js/myscript.js"></script>
</head>
<body>

     		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PlanetVibes Online Book Store</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="admin/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="admin/assets/css/jquery-te-1.4.0.css">

         <link href="admin/assets/css/select2.min.css" rel="stylesheet">

        <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
        <script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript" src="admin/assets/js/select2.min.js"></script>

    <script type="text/javascript" src="admin/assets/js/jquery.datetimepicker.full.min.js"></script>
    <script type="text/javascript" src="admin/assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>





    <style>
      #main-field{
        margin-top: 5rem!important;
      }
      .cart-img {
          width: calc(20%);
          height: 13vh;
          padding: 3px
      }
      .cart-img img{
        width: 100%;
        height: 100%;
      }
      .cart-qty {
        font-size: 14px
      }
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./">PlanetVibes Online Book Store</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="payment.php?page=about">Payment</a></li> 
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="javascript:void(0)" id="login_now">Login</a></li>
                                             
                        
                     
                    </ul>
                </div>
            </div>
        </nav>

<br/><hr>
<br>
<div class="box2 " >
<center><h1>Billing Information</h1></center>
<table  width="100%" > 

<tr><td>
<div style="border-style: groove; border-color: DarkBlack; width:99% ;background-color:lightyellow" >
  <form action ="paymentaction.php" method="POST" onsubmit="enableCheckbox1();enableCheckbox2()">
  
  <h2>Customer Information<hr></h2><br/>
    Full Name:<br/>
     <input type="text" name="Fullname" Placeholder="Full Name" required><br/><br/>
	 
    Address :<br/>
	  <textarea name="address" rows="4" cols="40" required></textarea></br></br>
	  
	Mobile Number:</br>
      <input type ="phone" name="mobile" placeholder="1234567890" pattern="[0-9]{10}" required><br/><br/>
	
	Ziocode:<br/>
	<input type="text" name="zico" ><br/><br/>
	
	Delivery Method:<br/>
	<select name="dmethod" required>
	 <option value="">Select</option>
	 <option value="Free Delivery">Free Delivery</option>
     <option value="Cash On Delivery">Cash On Delivery</option>
	 <option value="Parcel Post">Parcel Post</option>
     <option value="Click & Collect">Click & Collect</option>
	 </select><br/><br/>
	 
	 District:<br/>
	<select name="district" required>
	 <option value="">Select</option>
	 <option value="Ampara">Ampara</option>
	 <option value="Anuradhapura">Anuradhapura</option>
	 <option value="Badulla">Badulla</option>
	 <option value="Batticaloa">Batticaloa</option> 
	 <option value="Colombo">Colombo</option>
     <option value="Galle">Galle</option>
     <option value="Gampaha">Gampaha</option>
	 <option value="Hambantota">Hambantota</option>
	 <option value="Jaffna">Jaffna</option>
	 <option value="Kaluthara">Kaluthara</option>
	 <option value="Kandy">Kandy</option>
	 <option value="Kegalle">Kegalle</option>
	 <option value="Kilinochchi">Kilinochchi</option>
	 <option value="Kurunegala">Kurunegala</option>
	 <option value="Mannar">Mannar</option>
	 <option value="Matale">Matale</option>
	 <option value="Matara">Matara</option>
	 <option value="Monaragala">Monaragala</option>
	 <option value="Mullaitive">Mullaitive</option>
	 <option value="Nuwara Eliya">Nuwara Eliya</option>
     <option value="Polonnaruwa">Polonnaruwa</option>
	 <option value="Puttalam">Puttalam</option>
	 <option value="Rathnapura">Rathnapura</option>
	 <option value="Trincomalee">Trincomalee</option>
	 <option value="Vavuniya">Vavuniya</option>
	
	 </select><br/><br/>
	 <br/>
	 <center>
	 <input type="checkbox" id="checkbox1" onclick="enableCheckbox1()" >Accept privacy policy and terms.<br/><br/>
	   <button class="button  btn btn bttn1" type="button" id="Btn1" disabled>Save</button>
	   <button class="button  btn btn bttn4" type="reset" >Cancel</button>
	   <br/><br/></center><br/>
  
</div>
</td><td>
<div style="border-style: groove; border-color: DarkBlack; width:99% ;background-color:lightyellow" >
      
  
  <h2>Select a Payment <hr></h2>
    <h4>Your Saved Credit and Debit Cards<hr></h4>
	<input type="radio" name="Mtype" value="Visa" >Visa  </br>
	Name on card:
	  <input type="text" name="cname"  ><br/>
	 Expiry Date:
	  <input type="date" name="day" ><br/>
	  
	  CVV:
	 <input type="text" name="cvv " ></br> 
	  
	
	<h4>Another Payment Method<hr></h4>
	<input type="radio" name="Mtype" value="Credit card">Credit card
     <input type="radio" name="Mtype" value="Debit card">debit card</br></br>
	 
     <input type="checkbox" name="Ctype" value="Visa"><img src="img\visa.png" width="90" height="45">
	<input type="checkbox" name="Ctype" value="Mastercredit"><img src="img\Mastercredit.png" width="100" height="45">
	<input type="checkbox" name="Ctype" value="American Express"><img src="img\American.png" width="90" height="45">
	<input type="checkbox" name="Ctype" value="Discover"><img src="img\Discover.png" width="100" height="45"><br/><br/>
	
	<input type="radio" name="Mtype" value="Net Banking" >Net Banking<br/>
	  <select name="bank" >
	 <option value="">Select</option>
	 <option value="BOC">BOC</option>
     <option value="Commercial Bank">Commercial Bank</option>
	 <option value="DFCC Bank">DFCC Bank</option>
     <option value="HNB">HNB</option>
	 <option value="HSBC">HSBC</option>
     <option value="NSB">NSB</option>
	 <option value="People's Bank">People's Bank</option>
    <option value="Sampath bank">Sampath bank</option>
	
	 </select><br/><br/>
	 
	 Expiry Date 
	 <input type="date" name="day" > <br/>
	   CVV:
	 <input type="text" name="cvv "  ></br>
	 <br/>
	 <center>
	<input type="checkbox" id="checkbox2" onclick="enableCheckbox2()">I confirm my details.
	 </center> <br/>
	   <div align ="right">
	   <button class="button  btn btn bttn3" type="submit" id="Btn2"  disabled>Pay</button></div><br/><br/>
  </form>
  </div>
</td></tr>
</table></div>
<div id="preloader"></div>
        <footer class=" py-3 bg-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
			
                        <hr class="divider my-4" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 ml-auto ">
			<h5 class="mt-0 text-white">Help</h5>
                        <h7 class="mt-0 text-white">FAQs</h7><br>
                        <h7 class="mt-0 text-white">Return Policy</h7><br>
                        <h7 class="mt-0 text-white">Payement & Delivery</h7>
                        <!--<i class="fas fa-phone fa-3x mb-3 text-muted"></i>!-->
                        
                    </div>
                    <div class="col-lg-3 mr-auto ">
                        <h5 class="mt-0 text-white">My Account</h5>
                        <h7 class="mt-0 text-white">Sign In</h7><br>
                        <h7 class="mt-0 text-white">Order Status</h7><br>
                        <h7 class="mt-0 text-white">My Wish list</h7>
                        <!--<i class="fas fa-envelope fa-3x mb-3 text-muted"></i>!-->
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <!--<a class="d-block" href="mailto:info@sample.com">info@sample.com</a>!-->
                    </div>
                    <div class="col-lg-3 mr-auto ">
                        <h5 class="mt-0 text-white">Contact Us</h5>
                        <div class="text-white">0112456789</div>
                        <!--<i class="fas fa-envelope fa-3x mb-3 text-muted"></i>!-->
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:info@sample.com">planet.vibes@gmail.com</a>
                        <h7 class="mt-0 text-white">Boston Street, New York</h7>
                    </div>
                    <div class="col-lg-3 mr-auto ">
                        <h5 class="mt-0 text-white">Opening hours</h5>
                        <h7 class="mt-0 text-white">Mon-Fri 8.00am-6.00pm</h7><br>
                        <h7 class="mt-0 text-white">Sat 8.00am-4.00pm</h7><br>
                        <h7 class="mt-0 text-white">Sun 8.00am-3.00pm</h7>
                        <!--<i class="fas fa-envelope fa-3x mb-3 text-muted"></i>!-->
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <!--<a class="d-block" href="mailto:planet.vibes@gmail.com">planet.vibes@gmail.com</a>!-->
                    </div>
		    
                </div>
            </div>
            <br>
           
            <div class="container"><div class="small text-center text-muted">Copyright © 2021 - PlanetVibes Online Book Store  <a href="https://www.sourcecodester.com/" target="_blank"></a></div></div>
        </footer>

</body>
</html>
<?php include('footer.php') ?>