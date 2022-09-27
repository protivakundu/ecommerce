<?php 
require("../db.php");

$id = $_GET["id"];
$user_id = $_SESSION["user"]["id"];

$result = $con->query("SELECT * FROM cart WHERE customer='$user_id' AND product='$id'");
$record = mysqli_fetch_array($result);

if(!$record) {
    $result = $con->query("INSERT INTO cart(customer, product, quantity) VALUES('$user_id', '$id', '')");
    $_SESSION["success_msg"]="Product is added to cart";
}

header("Location: http://localhost/ecommerce/customer/cart.php");


