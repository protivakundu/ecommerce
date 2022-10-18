<?php
require("../db.php");

$id=$_GET["id"];

$sql="DELETE FROM product
    WHERE id='$id'";
$con->query($sql);
 header("Location:http://localhost/ecommerce/admin/products.php");
