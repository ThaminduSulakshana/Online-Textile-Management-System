<?php

include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE products SET name='$product_name', price='$product_price', image='$product_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:add items.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fashion Lanka Clothing Store</title>
        <meta charset="uth-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
      <link rel="stylesheet" href="styles.css">

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
            <li><a href="#">Contact Us</a></li>
            <li style="float: right;"><a href="Register Page.html">Register</a></li>
            <li style="float: right;"><a href="#">Login</a></li>
            <li style="float: right;"><a href="#" class="fa fa-user-circle"></a></li>
        </ul>
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

   <div class="container"> 


       <div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
        <form action="" method="post" enctype="multipart/form-data">
         <h3 class="title">update the product</h3>
         <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="enter the product name">
         <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>" placeholder="enter the product price">
         <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
         <input type="submit" value="update product" name="update_product" class="btn">
         <a href="add items.php" class="btn">go back!</a>
        </form>
   


   <?php }; ?>

   

      </div>

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