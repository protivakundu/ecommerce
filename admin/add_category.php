<?php include("./inc/header.php") ?>
<?php 
    $sql="SELECT * FROM catagories WHERE parent_id='0'";
    $result=$con->query($sql);

    
 ?>

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Add category</h1>

  <div class="container my-4">
    <form action="./Controller/categories/create.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Parent Categories</label>
        <select name="parent" id="" class="form-control">
          <option value="">Choose one</option>
          <?php 
            while($record=mysqli_fetch_array($result)) {
          ?>
          <option value="<?php echo $record['id'] ?>"><?php echo $record['name'] ;?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter name" name="name" />
      </div>
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
  </div>

</div>

<?php include("./inc/footer.php") ?>