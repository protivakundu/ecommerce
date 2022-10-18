<?php include("./inc/header.php");
$id=$_GET["id"];
?>

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Add Product</h1>
  <form action="./Controller/product/insert_product.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <p>Image</p>
      <input type="file" name="image">
    </div>
    <div class="form-group">
      <p for="exampleInputEmail1">Categories</p>
      <select name="category" id="" class="form-control">
        <option value="">--Select--</option>
        <?php
        $sql1 = $con->query("SELECT * FROM catagories WHERE parent_id='0'");
        while ($records = mysqli_fetch_array($sql1)) {
        ?>
          <optgroup label="<?php echo $records['name']; ?>">
            <?php
            $id = $records['id'];
            $sql2 = $con->query("SELECT * FROM catagories WHERE parent_id='$id'");
            while ($records = mysqli_fetch_array($sql2)) {
            ?>
              <option value="<?php echo $records['id']; ?>"><?php echo $records['name']; ?></option>
            <?php
            }
            ?>
          </optgroup>
        <?php } ?>

      </select>
    </div>
    <div class="form-group">
      <p>Product Name</p>
      <input type="text" name="p_name" value="samsung" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

    </div>
    <div class="form-group">
      <p>Product Code</p>
      <input type="text" name="p_code" value="5585" class="form-control" id="exampleInputPassword1" placeholder="Enter Code">
    </div>
    <div class="form-group">
      <p>Description</p>
      <textarea name="description" class="form-control">iooihoihohoho</textarea>
    </div>
    <div class="form-group">
      <p>Price</p>
      <input type="text" name="price" value="8955555" class="form-control" id="exampleInputPassword1" placeholder="Enter Price">
    </div>
    <div class="form-group">
      <p>Selling Price</p>
      <input type="text" name="s_price" value="8527" class="form-control" id="exampleInputPassword1" placeholder="Enter Selling Price">
    </div>
    <div class="form-group">
      <p>Warranty</p>
      <input type="date" name="warranty" value="25/08/2022" class="form-control" id="exampleInputPassword1" placeholder="Enter Warranty Date">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>


<?php include("./inc/footer.php") ?>