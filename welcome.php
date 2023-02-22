<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<?php

include 'config.php'; 

if(isset($_POST['product'])){

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_image = $_FILES['product_image']['name'];
$product_image_tmp_name = $_FILES['product_image']['tmp_name'];
$product_image_folder = 'uploaded_img/'.$product_image;

if(empty($product_name) || empty($product_price) || empty($product_image)){
   $message[] = 'please fill out all';
}else{
   $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
   $upload = mysqli_query($conn,$insert);
   if($upload){
      move_uploaded_file($product_image_tmp_name, $product_image_folder);
      $message[] = 'new product added successfully';
   }else{
      $message[] = 'could not add the product';
   }
}

};

if(isset($_GET['delete'])){
$id = $_GET['delete'];
mysqli_query($conn, "DELETE FROM products WHERE id = $id");
header('location:add items.php');
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
     <h3>add a new product</h3>
<?php

if(isset($message)){
foreach($message as $message){
   echo '<span class="message">'.$message.'</span>';
}
}

?>



<div class="admin-product-form-container">

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="Enter product name" name="Product_name" class="box">
      <input type="Eumber" placeholder="Enter product price" name="Product_price" class="box">
      <input type="File" accept="image/png, image/jpeg, image/jpg" name="Product_image" class="box">
      <input type="Submit" class="btn" name="add_product" value="Add product">
   </form>

</div>

<?php

$select = mysqli_query($conn, "SELECT * FROM products");

?>
<div class="product-display">
   <table class="product-display-table">
      <thead>
      <tr>
         <th>Product image</th>
         <th>Product name</th>
         <th>Product price</th>
         <th>Action</th>
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
         <td><?php echo $row['name']; ?></td>
         <td>$<?php echo $row['price']; ?>/-</td>
         <td>
            <a href="items update.php?edit=<?php echo $row['id']; ?>" class="btn">  Edit </a>
            <a href="add items.php?delete=<?php echo $row['id']; ?>" class="btn"> </i> Delete </a>
         </td>
      </tr>
   <?php } ?>
   </table>
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