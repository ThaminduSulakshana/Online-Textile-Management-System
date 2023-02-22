<?php

    session_start();
    //creting connection
    require 'config.php';

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $District = $_POST['District'];
    $zip = $_POST['zip']; 
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];



    $sql="INSERT INTO `delivery_payment`(firstname,email,address,city,District,zip,cardname,expmonth,expyear,cvv)
	VALUES('$firstname', '$email', '$address', '$city', '$District', '$zip', '$cardname', '$expmonth', '$expyear', '$cvv')";

    $result = mysqli_query($conn, $sql);

    if(strlen($cardnumber) > 16)
    {
        echo"<script>alert('Oops! Seems like your card number is wrong.')</script>";
    }
    else if(strlen($cvv) > 3)
    {
        echo"<script>alert('Oops! Seems like your CVV is wrong.')</script>";
    }
    else if(strlen($expyear) > 4)
    {
        echo"<script>alert('Oops! Seems like your Expire Year is wrong.')</script>";
    }
    else if(strlen($expmonth) > 2)
    {
        echo"<script>alert('Oops! Seems like your Expire Month is wrong.')</script>";
    }
    else
    {
        header("Location:payment successful.php");
    }

    $conn->close();

?>

