<?php
require("../db.php");

$parent_id=$_POST["parent"];
$name=$_POST["name"];

if($parent_id==""){
    $sql="INSERT INTO catagories(name)
    VALUES('$name')";
}
else{
    $sql="INSERT INTO catagories(parent_id,name)
    VALUES('$parent_id','$name')";
}

session_start();
$_SESSION["success_msg"]="Inserted";
header("location:http://localhost/ecommerce/admin/categories.php");
$con->query($sql);    
