<?php

require("../db.php");

$email=$_POST["email"];
$password=$_POST["password"];

// dont create sql command
$sql="SELECT * FROM users WHERE email='$email'";
    
$result=$con->query($sql);

$record=mysqli_fetch_array($result);
session_start();
if($record){
        $password_mathched=password_verify($password,$record["password"]);
        if($password_mathched){
                // redirect to dashboard
                $user = [
                        "name" => $record["name"],
                        "email" => $record["email"]
                ];

                $_SESSION["user"] = $user;
                header("Location: http://localhost/ecommerce/admin/dashboard.php");

        }
        else{
                // redirect to login
                
                unset($_SESSION["message"]);
                $_SESSION["fail"] = "Incorrect password";
                header("Location: http://localhost/ecommerce/admin/login.php");
        }
}
else{
        // redirect to login
        
        unset($_SESSION["message"]);
        $_SESSION["fail"] = "Incorrect email address";
        header("Location: http://localhost/ecommerce/admin/login.php");
}