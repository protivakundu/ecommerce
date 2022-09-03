<?php

require("../db.php");
    
$parent=$_POST['parent'];
$name=$_POST['name'];

$sql="INSERT INTO catagories(parent_id,name)VALUES('$parent','$name')";

$con->query($sql);

header("Location:http://localhost/ecommerce/admin/controller/form/category_form.html");

// if($con){

//     Echo "inserted";
// }

// ?>