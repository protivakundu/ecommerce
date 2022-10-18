<?php 
require("../db.php");

session_start();
$id = $_GET["id"];
$user_id = $_SESSION["user"]["id"];

echo $id;
echo $user_id;
$sql="SELECT * FROM cart WHERE customer='$user_id' AND product='$id'";
$result = $con->query($sql);
$record = mysqli_fetch_array($result);


if(!$record) {
    $result = $con->query("INSERT INTO cart(customer,product,quantity) VALUES('$user_id','$id','1')");
    $_SESSION["success_msg"]="Product is added to cart";
}

 header("Location: http://localhost/ecommerce/customer/cart.php");


