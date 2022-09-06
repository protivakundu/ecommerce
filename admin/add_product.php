<?php include("./inc/header.php") ?>

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Add Product</h1>
  <form>
    <div class="form-group">
      <p>Product Name</p>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Enter name">

    </div>
    <div class="form-group">
      <p>Product Code</p>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Code">
    </div>
    <div class="form-group">
      <p>Description</p>
      <textarea name="" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <p>Price</p>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Price">
    </div>
    <div class="form-group">
      <p>Selling Price</p>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Selling Price">
    </div>
    <div class="form-group">
      <p>Warranty</p>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Warranty Date">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>


<?php include("./inc/footer.php") ?>