<?php
include 'includes/header.php';
include 'includes/navigation.php';

if(isset($_POST['addcontent'])){
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $name = addslashes($_FILES['file']['name']);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder ="../images/testimonial/";
    $client_name =$_POST['client_name'];
    $comment =$_POST['comment'];
    $position =$_POST['position'];
    move_uploaded_file($file_loc, $folder.$file) or die(mysql_error());
    require '../database/conn.php';
    mysql_query("INSERT INTO testimonial(image,name,comment,client_name,position) VALUES ('".$file."','".$file."','".$comment."','".$client_name."','".$position."')") or die(mysql_error());
}
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Testimonial
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Testimonial</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container"><br>
        <a href="events" class="btn btn-success">Back to Testimonial</a><br><br>
            <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data"><input name="" type="hidden" value="">
            <div class="form-group">
                <label for="picture">Picture</label><br>
                <input name="file" type="file" id="picture" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" name="client_name" type="text" id="client_name" required> 
            </div>

            <div class="form-group">
                <label for="position">Position</label>
                <input class="form-control" name="position" type="text" id="position" required> 
            </div>

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" name="comment" cols="50" rows="10" id="comment" required></textarea>
            </div>
            <input class="btn btn-danger" type="reset" value="Clear">
            <input class="btn btn-primary" type="submit" value="Submit" name="addcontent"> <br><br>                                                             
        </form>
    </div>
</section><!-- /.content -->

    </div><!-- /.content-wrapper -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->

</div><!-- ./wrapper -->
<?php include 'includes/footer.php' ?>