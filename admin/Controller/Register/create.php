<?php 
require("../db.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];

$password_hash = password_hash($password, PASSWORD_BCRYPT);

$name= $fname." ".$lname;

$sql="INSERT INTO users(name,email,password)
        VALUES('$name','$email','$password_hash')";
$con->query($sql);

session_start();
$_SESSION["message"] = "Successfully registered";
header("Location: http://localhost/ecommerce/admin/login.php");