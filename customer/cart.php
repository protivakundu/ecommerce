<?php 
    if(!isset($_SESSION["user"])) {
        header("Location: http://localhost/ecommerce/customer/login.php");
        return;
    }
    
    include("./inc/header.php"); 
?>

<?php

$user_id = $_SESSION["user"]["id"];
$result=$con->query("SELECT * FROM cart NATURAL JOIN product ON cart.product=product.id WHERE cart.customer='$user_id'");

while($record = mysqli_fetch_array($result)) {
    echo "<pre>";
    print_r($record);
}

?>

<table>
    <thead>
        <tr>
            <th>SL NO</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>SUB TOTAL</th>
        </tr>
        
    </thead>
    <tbody>
        <?php  ?>
    </tbody>
</table>



<?php include("./inc/footer.php"); ?>