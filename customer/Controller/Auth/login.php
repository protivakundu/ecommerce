<?php 

require("../db.php");

$email=$_POST["email"];
$password=$_POST["password"];

$sql="SELECT * FROM  customer WHERE email ='$email'";
$connect=$con->query($sql);
$record=mysqli_fetch_array($connect);

session_start();
if($record) {
    if(password_verify($password, $record["password"])) {
        
        $_SESSION["user"] = array(
            "id" => $record["id"],
            "name" => $record["username"]
        );

        $_SESSION["success_msg"] = "Welcome!";
        header("location:http://localhost/ecommerce/customer/index.php");

    }
    else {
        $_SESSION["fail_msg"] = "You have entered wrong password";
        //Password not matched
        header("location:http://localhost/ecommerce/customer/login.php");
    }
}
else {
    $_SESSION["fail_msg"] = "You are not registered";
    // User are not registered
    header("location:http://localhost/ecommerce/customer/login.php");
}