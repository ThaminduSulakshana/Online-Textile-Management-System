<!DOCTYPE html>    
<html>    
<head>
        <title>Fashion Lanka Clothing Store</title>
        <meta charset="uth-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body style="background-image:url(img/bg2.jpg)">




<div class="row3">
  <div class="column4" style="background-image: url(imgs/header2.jpg)">
   <img id="logo" src="imgs/logo2.jpg" alt="This is the Company Logo"> 
   
  </div>
  <div class="column3" style="background-image: url(imgs/header2.jpg)">
    <h1>Fashion Lanka Clothing Store</h1>
  </div>
  <div class="column5" style="background-image: url(imgs/header2.jpg)">
   <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 100px;"></i>
   <div class="logoutbtn"><button>Log Out</button></div>
  </div>
</div>
        

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">Products</a>
  <a href="#contact">About Us</a>
  <a href="#contact">Contact Us</a>
  <input type="text1" placeholder="Search..">
</div>

<hr class="rounded">


<center><a href="feedback.php" class="button">
  <input type="button" id="addFeedbackButton" name="addFeedback" value="Add Feedback" style="background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px"></a></center>

   
     <?php
        // include 'feedback_upload.php';

        global $conn;
        $conn = new mysqli("localhost", "root", "", "fashionlanka");
        $sqlCommand = "SELECT * FROM reviews";
        $resultSet = $conn->query($sqlCommand);

        if($resultSet->num_rows > 0)
        {
            while($row = $resultSet->fetch_assoc())
            {
             $firstName = $row['firstName'];
             $lastName = $row['lastName'];
             $country=$row['country'];
             $description = $row['description'];

                echo <<<EOT
                       <div class="container1">
  
                           <p><span><b>$firstName $lastName</b></span>from $country</p>
                           <p>$description</p>
                       </div>
                                        

                EOT;
            }
        }
    ?>







<hr class="rounded">


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
               <a href="#" class="fa fa-facebook"></a>
               <a href="#" class="fa fa-twitter"></a>
               <a href="#" class="fa fa-instagram"></a>
               <a href="#" class="fa fa-google"></a>
             </div>
           </div>
        </footer>  
    
</body>    
</html>