<?php
include 'includes/header.php';
include 'includes/navigation.php';

include '../database/conn.php';

if(isset($_POST['addCat'])){
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $name = addslashes($_FILES['file']['name']);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder ="../images/category/";
    $cat = $_POST['cat'];
    move_uploaded_file($file_loc, $folder.$file) or die(mysql_error());

    mysql_query("INSERT INTO category(name,image_name) VALUES ('".$cat."','".$file."')") or die(mysql_error());

}


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Slider</a></li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content" ng-app="myApp" ng-controller="ProductCatCtrl">
        <div class="box container"><br>
            <div class="col-md-8 productbox">
                <div class="newsCategory">
                    <div>
                        <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data"><input name="" type="hidden" value="">
                          <input type="submit" class="btn btn-primary" name="addCat" value="Add new Category">
                          <div class="form-group">
                              <label for="picture">Picture</label><br>
                              <input name="file" type="file" id="picture" required>
                          </div>
                          <p ng-hide="edit" class="text-muted"></p>
                          <input type="text" placeholder="Enter Product Category" class="form-control" id="categoryName" name="cat" required>
                           <p ng-hide="edit" class="text-muted"></p>
                        </form>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Picture</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $sn = 0;
                            $query = mysql_query("SELECT * FROM category");
                            while ($row = mysql_fetch_assoc($query)) {
                              $cat_id = $row['cat_id'];
                              $name = $row['name'];
                              $image_name = $row['image_name'];
                              ?>
                              <tr>
                                <td><?php echo ++$sn;?></td>
                                <td><img src="../images/category/<?php echo $image_name; ?>" width="100px;"></td>
                                <td><?php echo $name;?></td>
                                <td>
                                  <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                                  &middot; 
                                  <a href="delete/deleteCategory.php?id=<?php echo $cat_id; ?>" class="text-danger" name="delete-slider"><i class="fa fa-remove"></i></a>
                                </td>
                            </tr>
                              <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4"><br><br><br>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->

</div><!-- ./wrapper -->

<?php include 'includes/footer.php' ?>