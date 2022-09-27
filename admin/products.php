<?php include("./inc/header.php"); 
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

<?php include("./inc/footer.php") ?>
