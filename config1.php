<?php
    $servername ="localhost";
    $username= "root";
    $password = "";
    $dbname = "fashionlanka";

   //The connection object
    global $conn;
   $conn = new mysqli($servername, $username,$password,$dbname);

   //check connection
   if($conn->connect_error)
   {
        echo "Connected Unsuccessfull!"; 
        die("Connection failed:". $conn->connect_error);
   }

 ?>