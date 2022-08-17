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
                <h3 class="card-title">Home Section</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="save-home-section.php" method="post" enctype="multipart/form-data">
                
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputPassword1" placeholder="Enter your title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tag</label>
                    <input type="text" class="form-control" name="tag" id="exampleInputPassword1" placeholder="Enter your tag">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Dec</label>
                    <input type="text" class="form-control" name="dsc" id="exampleInputPassword1" placeholder="Enter your dec">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">About</label>
                    <input type="text" class="form-control" name="about" id="exampleInputPassword1" placeholder="Enter your About">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Input File</label>
                    <input type="file" class="form-control" name="image" id="exampleInputEmail1" placeholder="Enter Logo">
                    </div>
                  
              
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </form>
            </div>
      <!-- DATA SHOW TABLE -->
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Sl No<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">tag</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Dsc</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">About</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Image</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Action</th></tr>
                  </thead>

                  <?php

                    $link=mysqli_connect("localhost","root","","project_one");

                    $query="SELECT * FROM home_section";

                    $query_run= mysqli_query($link,$query);

                     $serial=1;

                      while ($rows=mysqli_fetch_assoc($query_run)) {

                      ?>


                  <tbody>
                  
               
                  
                  <tr role="row" class="even">
                    <td><?php echo $serial;?></td>
                    <td><?php echo $rows['title'];?></td>
                    <td><?php echo $rows['tag'];?></td>
                    <td><?php echo $rows['dsc'];?></td>
                    <td><?php echo $rows['about'];?></td>
                    <td> <img style="width: 150px;height: 100px;"src="<?php echo $rows['image'];?>" alt=""></td>
                    
                    <td></td>
                    
                  </tr>
                  <?php
                      $serial++;

                    }
                  ?> 
                </tbody>
                 
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>

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