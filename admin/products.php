<?php include("./inc/header.php"); 

$sql="SELECT * FROM product LEFT JOIN catagories ON product.category=catagories.id";
$view=$con->query($sql);
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h1 class="h3 mb-4 text-gray-800">Products</h1>
        </div>
        <div class="col-md-6">
          <?php  if(isset($_SESSION["success_msg"])) { ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $_SESSION["success_msg"] ?>
            </div>
          <?php } 
            unset($_SESSION["success_msg"])
          ?>

        <?php  if(isset($_SESSION["fail_msg"])) { ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $_SESSION["fail_msg"] ?>
            </div>
          <?php } 
            unset($_SESSION["fail_msg"])
          ?>
        </div>
      </div>
      <div class="table-resposive">
      <table class="table table-stripe table-center">
      </table>
      </div>
       <a href="http://localhost/ecommerce/admin/add_product.php" class="btn btn-primary">Add Product</a>
        
    </div>
    <br>
    <br>
          <table class="table table-stripe table-center" >
            <thead>
              <tr>
                <td>Image</td>
                <td>Category</td>
                <td>P_name</td>
                <td>P_code</td>
                <td>Description</td>
                <td>Price</td>
                <td>S_price</td>
                <td>Warranty</td>
                <td>Edit</td>
                <td>Delete</td>
              </tr>
            </thead>
            <?php 
              while($records=mysqli_fetch_array($view)){
                
               
            ?>
            <tbody>
              <tr>
                <td><img src="http://localhost/ecommerce/admin/product_image/<?php echo $records["image"];?>" style="width:100px;"></td>
                <td><?php echo $records["name"];?></td>
                <td><?php echo $records["p_name"];?></td>
                <td><?php echo $records["p_code"];?></td>
                <td><?php echo $records["description"];?></td>
                <td><?php echo $records["price"];?></td>
                <td><?php echo $records["s_price"];?></td>
                <td><?php echo $records["warranty"];?></td>
                <td>
                  <a href="http://localhost/ecommerce/admin/Controller/product/edit_product.php?id=<?php echo $records[0];?>">
                    <button class="btn btn-primary">Edit</button>
                  </a>
                </td>
                <td>
                  <a href="http://localhost/ecommerce/admin/Controller/product/delete_product.php?id=<?php echo $records[0];?>">
                    <button class="btn btn-danger">Delete</button>
                  </a>
                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
<?php include("./inc/footer.php") ?>
