<?php include("./inc/header.php"); 
$view_categories="SELECT t1.name, t1.id, t2.name FROM catagories AS t1 LEFT JOIN catagories AS t2 ON t1.parent_id=t2.id";
$result=$con->query($view_categories);
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h1 class="h3 mb-4 text-gray-800">Categories</h1>
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
        </div>
      </div>
      <div class="table-resposive">
      <table class="table table-stripe table-center" >
        <thead>
          <tr>
           <th>Id</th>
            <th>Parent Category</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            while($records=mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td><?php echo $records['id'];?></td>
            <td><?php echo $records['name'];?></td>
            <td><?php echo $records['0'];?></td>
            <td>
              <a href="http://Controller/categories/update_categories.php?id=<?php echo $records['id'];?>" class="btn btn-outline-primary">
                Edit
              </a>
            </td>
            <td>
            <a href="http://Controller/categories/delete.php?id=<?php echo $records['id'];?>" class="btn btn-outline-danger">
                Delete
              </a>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
      </div>
       <a href="http://localhost/ecommerce/admin/add_category.php" class="btn btn-primary">Add Category</a>
        
    </div>

<?php include("./inc/footer.php") ?>


<!-- hello nice to meet you -->