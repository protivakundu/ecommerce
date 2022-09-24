<?php 

require("../db.php");

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

$password_hash=password_hash($password,PASSWORD_BCRYPT);

$sql="INSERT INTO customer(username,email,password) VALUES('$username' , '$email' ,'$password_hash')";

$con->query($sql);

$_SESSION["success_msg"] = "You have successfully registered";
header("location:http://localhost/ecommerce/customer/login.php");

?>