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
      <?php
        require('main-content.php')
      ?>
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