<?php
require("../db.php");

$file=$_FILES["image"];
$categories=$_POST["category"];
$p_name=$_POST["p_name"];
$p_code=$_POST["p_code"];
$description=$_POST["description"];
$price=$_POST["price"];
$s_price=$_POST["s_price"];
$warranty=$_POST["warranty"];

$fileName=$file["name"];
$fileExt=end(explode(".", $fileName));
$filePath=$file["tmp_name"];

$allowtype=array("jpg","jpeg","png","gif");

session_start();
if(in_array($fileExt,$allowtype)){
    $f_name=time().".".$fileExt;
    $destination="../../product_image/".$f_name;
    move_uploaded_file($filePath,$destination);

    $sql="INSERT INTO product(image,category,p_name,p_code,description,price,s_price,warranty)
        VALUES('$f_name','$categories','$p_name','$p_code','$description','$price','$s_price','$warranty')";

    $con->query($sql);  
    
    $_SESSION["success_msg"]="Your product is added";    
}
else{
    $_SESSION["fail_msg"]="Your product is added";
}

header("Location: http://localhost/ecommerce/admin/products.php");