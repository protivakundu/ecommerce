<?php 
    require("./Controller/db.php");
    session_start();
    if(!isset($_SESSION["user"])) {
        header("Location: http://localhost/ecommerce/customer/login.php");
        return;
    }

    include("./inc/header.php");

?>

<?php

$user_id = $_SESSION["user"]["id"];
$result=$con->query("SELECT * FROM cart INNER JOIN product ON cart.product=product.id WHERE cart.customer='$user_id'");


?>

<table class="table table-stripe table-center">
    <thead>
        <tr>
            <th>SL NO</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>SUB TOTAL</th>
            
        </tr>
        
    </thead>
    <?php $total = 0; while($record = mysqli_fetch_array($result)) {
            // echo "<pre>";
            // print_r($record);
    ?>
    <tbody>
        <tr>
            <td><?php echo $record[0];?></td>
            <td><?php echo $record["p_name"];?></td>
            <td><?php echo $record["s_price"];?></td>
            <td> 
            <?php echo $record["quantity"];?>
            <a href="http://localhost/ecommerce/customer/Controller/Cart/edit.php?id=<?php echo $record[0];?>&qty=<?php echo $record["quantity"]?>&op=plus">
                <button class="btn btn-primary">+</button>
            </a>
            <a href="http://localhost/ecommerce/customer/Controller/Cart/edit.php?id=<?php echo $record[0];?>&qty=<?php echo $record["quantity"]?>&op=minus">
                <button class="btn btn-danger">-</button>
            </a>
        </td>
            <td><?php echo ($record["quantity"]* $record["s_price"]);?></td>
            <?php  $total += $record["quantity"]* $record["s_price"]; ?>
            
            
        </tr>
    </tbody>
    <?php } ?>
    <tfoot>
        <tr>
            <td colspan=4></td>
            <td><?php echo ("Total : ".$total); ?></td>
        </tr>
    </tfoot>
    
</table>


<?php include("./inc/footer.php"); ?>