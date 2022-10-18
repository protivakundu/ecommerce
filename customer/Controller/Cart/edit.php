<?php
require("../db.php");

$id=$_GET["id"];
$qty=(int)$_GET["qty"];
$op=$_GET["op"];
//  echo $op;
// echo $qty;
// echo $id;
if($op == "plus") {
    $qty++;
    $sql="UPDATE cart
    SET 
        quantity='$qty'
    WHERE id='$id'";
    $view=$con->query($sql);
    header("Location:http://localhost/ecommerce/customer/cart.php");
}
else {
    if($qty > 1) {
        $qty--;
        $sql="UPDATE cart
    SET 
        quantity='$qty'
    WHERE id='$id'";
    $view=$con->query($sql);
    header("Location:http://localhost/ecommerce/customer/cart.php");
    }
    else {
        $sql="DELETE FROM cart
                WHERE id='$id'";
        $con->query($sql);
        header("Location:http://localhost/ecommerce/customer/cart.php");
    }
}





