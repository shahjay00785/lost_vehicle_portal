<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <?php include_once('admin_header.php'); ?>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php include_once('admin_menu.php'); ?>
    <!-- /.navbar-collapse -->
  </nav>

  <div id="page-wrapper">

      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">
                      Found Vehicle Registration
                  </h1>
                  <ol class="breadcrumb">
                      <li>
                          <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url('index.php/Admin_controller/Admin/manage_dashboard'); ?>">Dashboard</a>
                      </li>
                      <li class="active">
                          <i class="fa fa-edit"></i> Forms
                      </li>
                  </ol>
              </div>
          </div>
          <!-- /.row -->

          <div class="row">
              <div class="col-lg-6">

                  <form role="form" method="post" action="<?php echo base_url('index.php/Admin_controller/Admin/manage_found_vehicle/add'); ?>"  enctype="multipart/form-data" >

                       <div class="form-group">
                          <label>Vehicle Isssue Number</label>
                          <input type="text" id="txt_vehicle_issue_number" name="txt_vehicle_issue_number" class="form-control">
                       </div>

                       <div class="form-group">
                          <label>Vehicle Img</label>
                          <input type="file" id="txt_vehicle_img" name="txt_vehicle_img" class="form-control">
                       </div>

                       <div class="form-group">
                          <label>Vehicle Found place</label>
                          <input type="text" id="txt_vehicle_found_place" name="txt_vehicle_found_place" class="form-control">
                       </div>

                       <div class="form-group">
                          <label>Vehicle Found date</label>
                          <input type="text" id="txt_vehicle_found_date" name="txt_vehicle_found_date" class="form-control">
                       </div>


                      <button type="submit" name="btn_submit" class="btn btn-default">Submit Button</button>
                      <button type="reset" class="btn btn-default">Reset Button</button>

                  </form>

              </div>



          </div>
          <!-- /.row -->

  <div class="col-lg-12">
      <h2>found vehicle View <a href="<?php echo base_url('index.php/Admin_controller/admin/manage_vehicle_view'); ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/add.png'); ?>" width="50px" height="50px">  </a></h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Issue #</th>
              <th>Img</th>
              <th>place</th>
              <th>date</th>
              <th>Delete</th>

          </thead>

     <?php
     $i=0;
     foreach ($found_vehicle_view->result() as $row_found_vehicle)
     {


       $i++;
       if($i%2==0){
         ?>
         <tr class="active">
           <?php
         }  else { ?>
           <tr class="success">
             <?php
           }
           ?>


           <td><?php echo $row_found_vehicle->found_id; ?></td>
           <td><?php echo $row_found_vehicle->vehicle_issue_number; ?></td>
        	<td><img src="<?php echo base_url('img/found_vehicle_img/').$row_found_vehicle->vehicle_photo; ?>" width="100"> </td>
           <td><?php echo $row_found_vehicle->vehicle_found_place; ?></td>
           <td><?php echo $row_found_vehicle->vehicle_found_date; ?></td>


           <td><a href="<?php echo base_url('index.php/Admin_controller/Admin/manage_found_vehicle/delete/').$row_found_vehicle->found_id; ?>"> <img class="img-circle" src="<?php echo base_url('img/icon/delete.png'); ?>" width="50px" height="50px"> </a> </td>

         </tr>


         <?php
       }
       ?>




      </div>
      <!-- /.container-fluid -->

  </div>
