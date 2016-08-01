<?php
include 'includes/header.php';
include 'includes/navigation.php';
require '../database/conn.php';
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
        <a href="createtestimonial" class="btn btn-primary">Add Testimonial</a><br><br>
                <table class="table table-bordered example1">
            <thead>
            <tr>
                <th>Picture</th>
                <th>Name</th>
                <th>Position</th>
                <th>Comment</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $query = mysql_query("SELECT * FROM testimonial") or die(mysql_error());
                 while ($row = mysql_fetch_assoc($query)) {
                  $id = $row['id'];
                  /*$title = $row['title'];*/
                  $name = $row['name'];
                  $comment = $row['comment'];
                  $position = $row['position'];
                  $client_name = $row['client_name'];
                ?>
                  <tr>
                    <td><img src="../images/testimonial/<?php echo $name; ?>" width="100px"></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $position; ?></td>
                    <td><?php echo $comment; ?></td>
                    <td>
                      <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                      &middot; 
                      <a href="delete/deleteTesto.php?id=<?php echo $id; ?>" class="text-danger" name="delete-slider"><i class="fa fa-remove"></i></a>
                    </td>
                  </tr>
                  <?php
                 }
                ?>
            </tbody>
        </table>
    </div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->

</div><!-- ./wrapper -->


<?php include 'includes/footer.php' ?>