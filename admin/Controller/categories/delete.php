<?php session_start();

require("../db.php");
$id=$_GET['id'];

    // $sql1="SELECT * FROM catagories
    //      WHERE parent_id='1'";

$record = mysqli_fetch_array($con->query("SELECT * FROM catagories WHERE id='$id'"));

if($record["parent_id"] != 0) {
    $con->query("DELETE FROM catagories WHERE id='$id'");
     $_SESSION["success_msg"]="Categories deleted";
     header("Location:http://localhost/ecommerce/admin/categories.php");
     return;
}
else {
    while($records = mysqli_fetch_array($con->query("SELECT * FROM catagories WHERE parent_id='$id'"))) {
        $id = $records["id"];
        $con->query("DELETE FROM catagories WHERE id='$id'");
    }

    $con->query("DELETE FROM catagories WHERE id='$id'");
    $_SESSION["success_msg"]="Categories deleted";
     header("Location:http://localhost/ecommerce/admin/categories.php");
     return;
}

$_SESSION["fail_msg"]="Something went gone";
 return;
header("Location:http://localhost/ecommerce/admin/categories.php");