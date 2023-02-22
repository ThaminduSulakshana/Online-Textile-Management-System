<?php

session_start();

global $con;
$con = new mysqli("localhost", "root", "", "fashionlanka");
$toBeDeleted = $_SESSION["currentUser"];

$sqlCmd = "SELECT * FROM customer WHERE User_name = '$toBeDeleted'";
$resultSet = $con->query($sqlCmd);
$row = $resultSet->fetch_assoc();
$userID = intval($row["userID"]);

//delete user and user image -------------------------------------------------------------------------------------------------

$sqlCmd = "DELETE FROM customer WHERE User_name = '$toBeDeleted'";
$con->query($sqlCmd);

$con->close();

session_destroy();
header("Location: Home Page.html");

?>