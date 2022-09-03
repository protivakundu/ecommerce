<?php
require("../db.php");
$id=$_GET['id'];
$sql="DELETE FROM catagories
    WHERE id='$id'";

$con->query($sql);
echo "deleted";
// session_start();
// $_SESSION["delete"]="Successfully deleted";
// header("Location:http://localhost/ecommerce/admin/categories.php");