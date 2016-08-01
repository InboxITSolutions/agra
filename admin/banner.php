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
        Banner
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Banner</a></li>
      </ol>
    </section>

   <!-- Main content -->
<section class="content">
    <div class="box container"><br>
        <a href="create" class="btn btn-primary">Add Slider</a><br><br>
                <table class="table table-bordered example1">
            <thead>
            <tr>
                <th>SN</th>
                <th>Video</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $sn = 0;
                $query = mysql_query("SELECT * FROM banner") or die(mysql_error());
                 while ($row = mysql_fetch_assoc($query)) {
                  $id = $row['id'];
                  $src = $row['src'];
                ?>
                  <tr>
                    <td><?php echo ++$sn; ?></td>
                    <td>
                      <video autoplay loop muted width="100px">
                        <source src="../video/<?php echo $src; ?>" type="video/mp4"/>
                      </video>
                    </td>
                    <td>
                      <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                      &middot; 
                      <a href="delete/deleteBanner.php?id=<?php echo $id; ?>" class="text-danger" name="delete-slider"><i class="fa fa-remove"></i></a>
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