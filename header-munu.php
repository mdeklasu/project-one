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
                <h3 class="card-title">HEADER Munu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="save-header-munu.php" method="post" >
                
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">HOME</label>
                    <input type="text" class="form-control" name="home" id="exampleInputPassword1" placeholder="Enter your Home Munu">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">ABOUT</label>
                    <input type="text" class="form-control" name="about" id="exampleInputPassword1" placeholder="Enter your ABOUT Munu">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">SERVICES</label>
                    <input type="text" class="form-control" name="services" id="exampleInputPassword1" placeholder="Enter your SERVICES Munu">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Team</label>
                    <input type="text" class="form-control" name="team" id="exampleInputPassword1" placeholder="Enter your Team Munu">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">CLIENTS</label>
                    <input type="text" class="form-control" name="clients" id="exampleInputPassword1" placeholder="Enter your CLIENTS Munu">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">CONTACT US</label>
                    <input type="text" class="form-control" name="contact" id="exampleInputPassword1" placeholder="Enter your CONTACT US Munu">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">SEARCH</label>
                    <input type="text" class="form-control" name="search" id="exampleInputPassword1" placeholder="Enter your SEARCH US Munu">
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