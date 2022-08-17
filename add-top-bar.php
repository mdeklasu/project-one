<?php
include('header.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php
    require('nave.php');
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php
  require('sidebarmenu.php');
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
      require('content-head.php');
    ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      



      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Top Bar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="save-top-bar.php" method="post" enctype="multipart/form-data">
                
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cell</label>
                    <input type="cell" class="form-control" name="cell" id="exampleInputPassword1" placeholder="Enter your cell number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Input File</label>
                    <input type="file" class="form-control" name="logo" id="exampleInputEmail1" placeholder="Enter Logo">
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                
              
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </form>
            </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
   require('footer.php');
 ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php

require('footer-script.php');

?>