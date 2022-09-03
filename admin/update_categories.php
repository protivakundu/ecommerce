<?php include("./inc/header.php"); 

$id=$_GET ['id'];
$sql="SELECT * FROM  catagories
    WHERE id='$id'";

$result=$con->query($sql);
$records=mysqli_fetch_array($result);
?>
 <div class="container my-4">
    <form action="./Controller/categories/create.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Parent Categories</label>
        <select name="parent" id="" class="form-control">
          <option value="<?php echo $record['0'] ;?>"></option>
          
          <option value="<?php echo $record['name'] ;?>"></option>
          
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $records['$name'];?>" name="name" >
      </div>
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
  </div>
  <?php include("./inc/footer.php") ?>