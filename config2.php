<?php
    $servername ="localhost";
    $username= "root";
    $password = "";
    $dbname = "textile";

   //The connection object
    global $conn;
   $conn = new mysqli($servername, $username,$password,$dbname);

   //check connection
   if($conn->connect_error)
   {
       die("Connection failed:". $conn->connect_error);
   }

   
 ?>