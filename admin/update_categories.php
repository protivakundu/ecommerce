<?php include("./inc/header.php"); 

$id=$_GET ['id'];
$sql="SELECT * FROM  catagories
    WHERE id='$id'";

$result=$con->query($sql);
$records=mysqli_fetch_array($result);
?>
 <div class="container my-4">
    <form action="./Controller/categories/update.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Categories</label>
        <select name="category" id="" class="form-control">
          <option value="">--Select--</option>
          <?php 
          $sql1 = $con->query("SELECT * FROM catagories WHERE parent_id='0'");
          while($records=mysqli_fetch_array($sql1)){
          ?>
          <optgroup label="<?php echo $records['name'];?>">
          <?php 
          $id=$records['id'];
          $sql2 = $con->query("SELECT * FROM catagories WHERE parent_id='$id'");
          while($records=mysqli_fetch_array($sql2)){
          ?>
          <option value="<?php echo $records['id'];?>"><?php echo $records['name'];?></option>
          <?php 
          }
          ?>
        </optgroup> 
          <?php } ?>
          
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
  </div>
  <?php include("./inc/footer.php") ?>